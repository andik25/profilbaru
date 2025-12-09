<?php

namespace App\Livewire;

use App\Exports\Laporan as ExportsLaporan;
use App\Models\desa;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\KolomTabel;
use App\Models\MasterTabel;
use App\Models\RoleProgram;
use App\Exports\UsersExport;
use App\Models\MasterIndikator;
use App\Models\ModelKolomDetail;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;

class Laporan extends Component
{

    public $tabels = null;
    public $data = [];
    public $isi;

    public $transformedData;
    public $periode;
    public $keempat;
    public $jenis;
    public $kalikomulatif;
    public $keempatOptions = [];

    public function updatedJenis()
    {
        if ($this->tabels && $this->periode && $this->jenis && $this->keempat) {
            $karim = ModelKolomDetail::where('id_tabel', $this->tabels)->where('id_kategori', '>', 0)->get();
            $idIndikators = $karim->pluck('id_indikator')->toArray();
            $bulan_indikator = MasterIndikator::with('kategoriindikator')->wherein('id', $karim->pluck('id_indikator'))->get();
            $twsatu = collect(['01', '02', '03']);
            $twdua = collect(['04', '05', '06']);
            $twtiga = collect(['07', '08', '09']);
            $twempat = collect(['10', '11', '12']);
            $semsatu = collect(['01', '02', '03', '04', '05', '06']);
            $semdua = collect(['07', '08', '09', '10', '11', '12']);
            $tahunan = collect(['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12']);
            if (($bulan_indikator->pluck('kategoriindikator.proy'))->contains(0)) {
                if ($this->periode == 1) {
                    if ($this->jenis == 2) {
                        $filteredValues = [0, $this->keempat];
                        $this->kalikomulatif = 1;
                    } elseif ($this->jenis == 1) {
                        $filteredValues = collect([0])->merge(collect(range('01', $this->keempat)));
                        $this->kalikomulatif = $this->keempat;
                    }
                } elseif ($this->periode == 2) {
                    if ($this->keempat == 1) {
                        $filteredValues = collect([0])->merge($twsatu);
                        $this->kalikomulatif = 3;
                    } elseif ($this->keempat == 2) {
                        if ($this->jenis == 2) {
                            $filteredValues = collect([0])->merge($twdua);
                            $this->kalikomulatif = 3;
                        } elseif ($this->jenis == 1) {
                            $filteredValues = collect([0])->merge($twsatu)->merge($twdua);
                            $this->kalikomulatif = 6;
                        }
                    } elseif ($this->keempat == 3) {
                        if ($this->jenis == 2) {
                            $filteredValues = collect([0])->merge($twtiga);
                            $this->kalikomulatif = 3;
                        } elseif ($this->jenis == 1) {
                            $filteredValues = collect([0])->merge($twsatu)->merge($twdua)->merge($twtiga);
                            $this->kalikomulatif = 9;
                        }
                    } elseif ($this->keempat == 4) {
                        if ($this->jenis == 2) {
                            $filteredValues = collect([0])->merge($twempat);
                            $this->kalikomulatif = 3;
                        } elseif ($this->jenis == 1) {
                            $filteredValues = collect([0])->merge($twsatu)->merge($twdua)->merge($twtiga)->merge($twempat);
                            $this->kalikomulatif = 12;
                        }
                    }
                } elseif ($this->periode == 3) {
                    if ($this->keempat == 1) {
                        if ($this->jenis == 2) {
                            $filteredValues = collect([0])->merge($semsatu);
                            $this->kalikomulatif = 6;
                        } elseif ($this->jenis == 1) {
                            $filteredValues = collect([0])->merge($semsatu);
                            $this->kalikomulatif = 6;
                        }
                    } elseif ($this->keempat == 2) {
                        if ($this->jenis == 2) {
                            $filteredValues = collect([0])->merge($semdua);
                            $this->kalikomulatif = 6;
                        } elseif ($this->jenis == 1) {
                            $filteredValues = collect([0])->merge($semsatu)->merge($semdua);
                            $this->kalikomulatif = 12;
                        }
                    }
                } elseif ($this->periode == 4) {
                    $filteredValues = collect([0])->merge($tahunan);
                    $this->kalikomulatif = 12;
                }
            } else {
                $filteredValues = $this->keempat;
            }
            $this->data = KolomTabel::with('koldetail')->where('id_tabel', $this->tabels)->get();

            if ($idIndikators) {
                if (Gate::allows('super_admin')) {
                    $this->isi = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
                    }])->get();

                    // untuk ditampilkan
                    $this->transformedData = $this->isi->map(function ($kecamatan) use ($idIndikators) {
                        $isiPivoted = $kecamatan->isi->keyBy('id_master_indikator');
                        $result = [
                            'fasyankes' => $kecamatan->puskesmas,
                            'bulan' => $kecamatan->bulan,
                        ];
                        foreach ($idIndikators as $idik) {
                            $result["indikator_male_{$idik}"] = $isiPivoted->get($idik)->nilai_male ?? 0;
                            $result["indikator_female_{$idik}"] = $isiPivoted->get($idik)->nilai_female ?? 0;
                            $result["indikator_male_female_{$idik}"] = ($isiPivoted->get($idik)->nilai_male ?? 0) + ($isiPivoted->get($idik)->nilai_female ?? 0) ?? 0;
                        }
                        return $result;
                    });
                } elseif (Gate::allows('admin')) {
                    $this->isi = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
                    }])->get();
                    // untuk ditampilkan
                    $this->transformedData = $this->isi->map(function ($kecamatan) use ($idIndikators) {
                        $isiPivoted = $kecamatan->isi->keyBy('id_master_indikator');
                        $result = [
                            'fasyankes' => $kecamatan->puskesmas,
                        ];
                        foreach ($idIndikators as $idik) {
                            $result["indikator_male_{$idik}"] = $isiPivoted->get($idik)->nilai_male ?? 0;
                            $result["indikator_female_{$idik}"] = $isiPivoted->get($idik)->nilai_female ?? 0;
                            $result["indikator_male_female_{$idik}"] = ($isiPivoted->get($idik)->nilai_male ?? 0) + ($isiPivoted->get($idik)->nilai_female ?? 0) ?? 0;
                        }
                        return $result;
                    });
                } elseif (Gate::allows('dinkes')) {
                    $this->isi = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
                    }])->get();
                    // untuk ditampilkan
                    $this->transformedData = $this->isi->map(function ($kecamatan) use ($idIndikators) {
                        $isiPivoted = $kecamatan->isi->keyBy('id_master_indikator');
                        $result = [
                            'fasyankes' => $kecamatan->puskesmas,
                        ];
                        foreach ($idIndikators as $idik) {
                            $result["indikator_male_{$idik}"] = $isiPivoted->get($idik)->nilai_male ?? 0;
                            $result["indikator_female_{$idik}"] = $isiPivoted->get($idik)->nilai_female ?? 0;
                            $result["indikator_male_female_{$idik}"] = ($isiPivoted->get($idik)->nilai_male ?? 0) + ($isiPivoted->get($idik)->nilai_female ?? 0) ?? 0;
                        }
                        return $result;
                    });
                } elseif (Gate::allows('pj_dinkes')) {
                    $this->isi = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
                    }])->get();
                    // untuk ditampilkan
                    $this->transformedData = $this->isi->map(function ($kecamatan) use ($idIndikators) {
                        $isiPivoted = $kecamatan->isi->keyBy('id_master_indikator');
                        $result = [
                            'fasyankes' => $kecamatan->puskesmas,
                        ];
                        foreach ($idIndikators as $idik) {
                            $result["indikator_male_{$idik}"] = $isiPivoted->get($idik)->nilai_male ?? 0;
                            $result["indikator_female_{$idik}"] = $isiPivoted->get($idik)->nilai_female ?? 0;
                            $result["indikator_male_female_{$idik}"] = ($isiPivoted->get($idik)->nilai_male ?? 0) + ($isiPivoted->get($idik)->nilai_female ?? 0) ?? 0;
                        }
                        return $result;
                    });
                } elseif (Gate::allows('kecamatan')) {
                    $kec = Kecamatan::where('user_id', auth()->user()->id)->first();
                    $this->isi = desa::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_author, id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female')->wherein('bulan', $filteredValues)->wherein('id_master_indikator', $idIndikators)->groupBy('id_master_indikator', 'id_author');
                    }, 'isi.indi'])->where('id_kec', $kec->id)->get();
                    // untuk ditampilkan
                    $this->transformedData = $this->isi->map(function ($kecamatan) use ($idIndikators) {
                        $isiPivoted = $kecamatan->isi->keyBy('id_master_indikator');
                        $result = [
                            'fasyankes' => $kecamatan->desa,
                        ];
                        foreach ($idIndikators as $idik) {
                            $result["indikator_male_{$idik}"] = $isiPivoted->get($idik)->nilai_male ?? 0;
                            $result["indikator_female_{$idik}"] = $isiPivoted->get($idik)->nilai_female ?? 0;
                            $result["indikator_male_female_{$idik}"] = ($isiPivoted->get($idik)->nilai_male ?? 0) + ($isiPivoted->get($idik)->nilai_female ?? 0) ?? 0;
                        }
                        return $result;
                    });
                } elseif (Gate::allows('pj_pkm')) {
                    $kec = RoleProgram::where('user_id', auth()->user()->id)->first();
                    $this->isi = desa::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_author, id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female')->wherein('bulan', $filteredValues)->wherein('bulan', $filteredValues)->wherein('id_master_indikator', $idIndikators)->groupBy('id_master_indikator', 'id_author');
                    }, 'isi.indi'])->where('id_kec', $kec->id_kec)->get();
                    // untuk ditampilkan
                    $this->transformedData = $this->isi->map(function ($kecamatan) use ($idIndikators) {
                        $isiPivoted = $kecamatan->isi->keyBy('id_master_indikator');
                        $result = [
                            'fasyankes' => $kecamatan->desa,
                        ];
                        foreach ($idIndikators as $idik) {
                            $result["indikator_male_{$idik}"] = $isiPivoted->get($idik)->nilai_male ?? 0;
                            $result["indikator_female_{$idik}"] = $isiPivoted->get($idik)->nilai_female ?? 0;
                            $result["indikator_male_female_{$idik}"] = ($isiPivoted->get($idik)->nilai_male ?? 0) + ($isiPivoted->get($idik)->nilai_female ?? 0) ?? 0;
                        }
                        return $result;
                    });
                }
            }
        } else {
            $this->data = '';
            $this->isi = '';
            $this->transformedData = '';
        }
    }

    public function ubahtabels()
    {
        $this->data = '';
        $this->isi = '';
        $this->transformedData = '';
        $this->periode = '';
        $this->keempat = '';
        $this->jenis = '';
    }

    public function ubahkeempat()
    {
        $this->data = '';
        $this->isi = '';
        $this->transformedData = '';
        $this->jenis = '';
    }

    public function updateKeempatOptions()
    {
        $this->data = '';
        $this->isi = '';
        $this->transformedData = '';
        $this->keempat = '';
        $this->jenis = '';
        switch ($this->periode) {
            case '1':

                $this->keempatOptions = [
                    ['id' => '01', 'name' => 'Januari'],
                    ['id' => '02', 'name' => 'Februari'],
                    ['id' => '03', 'name' => 'Maret'],
                    ['id' => '04', 'name' => 'April'],
                    ['id' => '05', 'name' => 'Mei'],
                    ['id' => '06', 'name' => 'Juni'],
                    ['id' => '07', 'name' => 'Juli'],
                    ['id' => '08', 'name' => 'Agustus'],
                    ['id' => '09', 'name' => 'September'],
                    ['id' => '10', 'name' => 'Oktober'],
                    ['id' => '11', 'name' => 'Nopember'],
                    ['id' => '12', 'name' => 'Desember'],
                ];
                break;
            case '2':
                $this->keempatOptions = [
                    ['id' => 1, 'name' => 'Triwulan I'],
                    ['id' => 2, 'name' => 'Triwulan II'],
                    ['id' => 3, 'name' => 'Triwulan III'],
                    ['id' => 4, 'name' => 'Triwulan IV'],
                ];
                break;
            case '3':
                $this->keempatOptions = [
                    ['id' => 1, 'name' => 'Semester I'],
                    ['id' => 2, 'name' => 'Semester II']
                ];
                break;
            case '4':
                $this->keempatOptions = [
                    ['id' => 2025, 'name' => '2025']
                ];
                break;
            default:
                $this->keempatOptions = [];
                break;
        }
    }

    public function export()
    {
        return Excel::download(new ExportsLaporan($this->jenis, $this->keempat, $this->tabels, $this->kalikomulatif, $this->periode), 'users.xlsx');
    }

    public function render()
    {
        return view('livewire.laporan', [
            'master_tabels' => MasterTabel::all()
        ]);
    }
}
