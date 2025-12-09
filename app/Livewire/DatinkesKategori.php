<?php

namespace App\Livewire;

use App\Models\desa;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\PjProgrmas;
use App\Models\RoleProgram;
use App\Models\KomponenProgram;
use App\Models\ProgramKesehatan;
use Livewire\Attributes\Session;
use Illuminate\Support\Facades\Gate;
use App\Models\MasterKategoriIndikator;

class DatinkesKategori extends Component
{

    public $kom;
    public $komp;
    public $idDesa;
    public $totalIsi = 0;

    #[Session(key: 'thn')]
    public $tahuna;

    #[Session(key: 'bln')]
    public $bln;

    public function mount($kom, $komp)
    {
        $this->kom = $kom;
        $this->komp = $komp;
    }

     // Method untuk mengganti bulan (dipanggil dari modal)
    public function gantiBulan()
    {
        return $this->redirect('/datinkes/'. $this->kom .'/'. $this->komp );
    }

    public function render()
    {
        if (Gate::allows('kecamatan')) {
            $kec = Kecamatan::where('user_id', auth()->user()->id)->first();
            $this->idDesa = desa::where('id_kec', $kec->id)->pluck('id')->toArray();
        }
        elseif (Gate::allows('pj_pkm')) {
            $kec = RoleProgram::where('user_id', auth()->user()->id)->first();
            $this->idDesa = desa::where('id_kec', $kec->id_kec)->pluck('id')->toArray();
        }
        elseif (Gate::allows('super_admin')) {
            $this->idDesa = desa::pluck('id')->toArray();
        }
        elseif (Gate::allows('dinkes')) {
            $this->idDesa = desa::pluck('id')->toArray();
        }
        elseif (Gate::allows('pj_dinkes')) {
            $this->idDesa = desa::pluck('id')->toArray();
        }
        elseif (Gate::allows('desa')) {
            $this->idDesa = desa::where('user_id', auth()->user()->id)->pluck('id')->toArray();
        }
        
        $kategori = MasterKategoriIndikator::where('id_komponen', $this->komp)->with(['indi' => function ($query) {
            $query->withCount(['isi' => function ($subQuery) {
                $subQuery->whereIn('id_author', $this->idDesa)->where('bulan', $this->bln);
            }]);
        }, 'validasipkm' => function ($query) {
            $query->where('is_active', 1);
        }])
            ->get();

        // Hitung total dari isi_count
        $this->totalIsi = $kategori->sum(function ($kat) {
            return $kat->indi->sum('isi_count');
        });

        $pjp = PjProgrmas::where('id_user', auth()->user()->id)->pluck('id_kategori')->toArray();
        return view('livewire.datinkes-kategori', [
            'program' => ProgramKesehatan::find($this->kom),
            'komponen' => KomponenProgram::find($this->komp),
            'datinkeskategori' => $kategori
        ]);
    }
}
