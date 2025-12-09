<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RoleProgram;
use App\Models\TingkatUser;
use App\Models\ProgramKesehatan;
use Livewire\Attributes\Session;

use function PHPUnit\Framework\isNull;
use App\Models\MasterKategoriIndikator;

class Profil extends Component
{
    #[Session(key: 'thn')]
    public $tahuna;

    #[Session(key: 'bln')]
    public $bln;

    // Method untuk mengganti bulan (dipanggil dari modal)
    public function gantiBulan()
    {
        return $this->redirect('/datinkes');
    }

    public function render()
    {
        $role = TingkatUser::find(auth()->user()->tingkat);
        return view('livewire.profil', [
            'program' => ProgramKesehatan::where('status', 1)->whereNot('id', 4)->get(),
            'mki' => MasterKategoriIndikator::all(),
            'tingkat_user' => TingkatUser::where('role', $role->role)->get()
        ]);
    }
}