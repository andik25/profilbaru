<?php

namespace App\Exports;

use App\Models\desa;
use App\Models\User;
use App\Models\Kecamatan;
use App\Models\KolomTabel;
use App\Models\RoleProgram;
use App\Traits\LaporanTraits;
use App\Models\MasterIndikator;
use App\Models\ModelKolomDetail;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class Laporan implements FromCollection, WithHeadings, WithMapping
{
    use LaporanTraits;

    public $jenis;
    public $keempat;
    public $tabels;
    public $kalikomulatif;
    public $periode;

    public function __construct($jenis = null, $keempat = null, $tabels = null, $kalikomulatif = null, $periode = null)
    {
        $this->jenis = $jenis;
        $this->keempat = $keempat;
        $this->tabels = $tabels;
        $this->kalikomulatif = $kalikomulatif;
        $this->periode = $periode;
    }

    public function collection()
    {
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

        if (Gate::allows('pj_dinkes')) {
            $nyobak = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
            }])->get();
            $tape = $nyobak->map(function ($kecamatan) use ($idIndikators) {
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
            $nyobak = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
            }])->get();
            // untuk ditampilkan
            $tape = $nyobak->map(function ($kecamatan) use ($idIndikators) {
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
            $nyobak = desa::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                $query->selectRaw('id_author, id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female')->wherein('bulan', $filteredValues)->wherein('id_master_indikator', $idIndikators)->groupBy('id_master_indikator', 'id_author');
            }, 'isi.indi'])->where('id_kec', $kec->id)->get();
            // untuk ditampilkan
            $tape = $nyobak->map(function ($kecamatan) use ($idIndikators) {
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
            $nyobak = desa::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                $query->selectRaw('id_author, id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female')->wherein('bulan', $filteredValues)->wherein('bulan', $filteredValues)->wherein('id_master_indikator', $idIndikators)->groupBy('id_master_indikator', 'id_author');
            }, 'isi.indi'])->where('id_kec', $kec->id_kec)->get();
            // untuk ditampilkan
            $tape = $nyobak->map(function ($kecamatan) use ($idIndikators) {
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
        } elseif (Gate::allows('super_admin')) {
            $nyobak = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
            }])->get();

            // untuk ditampilkan
            $tape = $nyobak->map(function ($kecamatan) use ($idIndikators) {
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
        }


        return $tape;
    }

    public function headings(): array
    {
        $config = KolomTabel::where('id_tabel', $this->tabels)->pluck('nama_kolom')->toArray(); // Sesuaikan query
        if ($config) {
            return array_merge(['No', 'Puskesmas'], $config);
        }
        return [
            'Heading Gagal Dimuat !',
        ];
    }

    public function map($tape): array
    {
        return $this->mapData($tape);
    }
}
