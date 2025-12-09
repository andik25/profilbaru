<?php

namespace App\Livewire;

use App\Models\desa;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\KolomTabel;
use App\Models\MasterTabel;
use App\Models\DataIndikator;
use App\Models\MasterIndikator;
use App\Models\ModelKolomDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Models\MasterKategoriIndikator;

class Report extends Component
{

    public $tabels = null;
    public $data = [];
    public $isi = [];

    public $periode;
    public $keempat;
    public $jenis;
    public $keempatOptions = [];

    public function updatedKeempat()
    {
        if ($this->tabels && $this->periode && $this->jenis && $this->keempat) {
            $karim = ModelKolomDetail::where('id_tabel', $this->tabels)->where('id_kategori', '>', 0)->get();
            $idIndikators = $karim->pluck('id_indikator')->toArray();
            $bulan_indikator = MasterIndikator::with('kategoriindikator')->wherein('id', $karim->pluck('id_indikator'))->get();
            $twsatu = collect(['01', '02', '03']);
            $twdua = collect(['04', '05', '06']);
            $twtiga = collect(['07', '08', '09']);
            $twempat = collect(['10', '11', '12']);
            if (($bulan_indikator->pluck('kategoriindikator.proy'))->contains(0)) {
                if ($this->periode == 1) {
                    $filteredValues = [0, $this->keempat];
                } elseif ($this->periode == 2) {
                    if ($this->keempat == 1) {
                        $filteredValues = collect([0])->merge($twsatu);
                    } elseif ($this->keempat == 2) {
                        $filteredValues = collect([0])->merge($twdua);
                    } elseif ($this->keempat == 3) {
                        $filteredValues = collect([0])->merge($twtiga);
                    } elseif ($this->keempat == 4) {
                        $filteredValues = collect([0])->merge($twempat);
                    }
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
                } elseif (Gate::allows('admin')) {
                    $this->isi = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
                    }])->get();
                } elseif (Gate::allows('dinkes')) {
                    $this->isi = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
                    }])->get();
                } elseif (Gate::allows('pj_dinkes')) {
                    $this->isi = Kecamatan::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $idIndikators)->wherein('bulan', $filteredValues)->groupBy('id_master_indikator', 'laravel_through_key');
                    }])->get();
                } elseif (Gate::allows('kecamatan')) {
                    $kec = Kecamatan::where('user_id', auth()->user()->id)->first();
                    $this->isi = desa::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->wherein('bulan', $filteredValues)->wherein('id_master_indikator', $idIndikators);
                    }, 'isi.indi'])->where('id_kec', $kec->id)->get();
                } elseif (Gate::allows('pj_pkm')) {
                    $kec = Kecamatan::where('user_id', auth()->user()->id)->first();
                    $this->isi = desa::with(['isi' => function ($query) use ($idIndikators, $filteredValues) {
                        $query->wherein('bulan', $filteredValues)->wherein('id_master_indikator', $idIndikators);
                    }, 'isi.indi'])->where('id_kec', $kec->id)->get();
                }
            }
        } else {
            $this->data = '';
            $this->isi = '';
        }
    }

    public function ubahtabels()
    {
        $this->data = '';
        $this->isi = '';
        $this->periode = '';
        $this->jenis = '';
        $this->keempat = '';
    }

    public function ubahjenis()
    {
        $this->data = '';
        $this->isi = '';
        $this->keempat = '';
    }

    public function updateKeempatOptions()
    {
        $this->data = '';
        $this->isi = '';
        $this->jenis = '';
        $this->keempat = '';
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
                    ['id' => 2024, 'name' => '2024'],
                    ['id' => 2025, 'name' => '2025']
                ];
                break;
            default:
                $this->keempatOptions = [];
                break;
        }
    }

    public function render()
    {
        return view('livewire.report', [
            'master_tabels' => MasterTabel::all()
        ]);
    }
}
