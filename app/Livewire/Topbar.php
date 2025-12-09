<?php

namespace App\Livewire;

use App\Models\desa;
use Livewire\Component;
use App\Models\Validasi;
use Livewire\Attributes\Session;
use Illuminate\Support\Facades\Gate;
use App\Models\MasterKategoriIndikator;

class Topbar extends Component
{
    #[Session(key: 'bln')]
    public $bln;

    #[Session(key: 'kom')]
    public $komp;

    public $notifications = [];
    public $id_valid;
    public $kategori;
    public $proyeksitetap = 4;
    public $data;
    public $id_program_banget;

    public function mount()
    {
        $itor = desa::where('user_id', auth()->user()->id)->first();
        // Ambil notifikasi untuk user yang sedang login (sesuaikan dengan logika Anda)
        if (Gate::allows('desa')) {
            $this->notifications = Validasi::where('id_author', $itor->id)->where('is_active', 0)
                ->orderBy('created_at', 'desc')
                ->get();
        }
    }

    public function AmbilkanBulanbu($id_valid)
    {
        $sesuainotif = Validasi::find($id_valid);
        $this->bln = $sesuainotif->bulan;
        $this->kategori = MasterKategoriIndikator::with('komponen.program')->find($sesuainotif->id_kategori);
        return $this->redirect('/datinkes/'. $this->kategori->komponen->program->id .'/'. $this->kategori->komponen->id .'/'. $this->kategori->id );
    }

    public function render()
    {
        return view('livewire.topbar');
    }
}