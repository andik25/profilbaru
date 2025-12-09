<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\KomponenProgram;
use App\Models\ProgramKesehatan;
use Livewire\Attributes\Session;

class DatinkesKomponen extends Component
{

    #[Session(key: 'thn')]
    public $tahuna;

    #[Session(key: 'bln')]
    public $bln;

    #[Session(key: 'kom')]
    public $komp;

    public $nama_komponen;

    public function mount($kom)
    {
        $this->komp = $kom;
    }

    // Method untuk mengganti bulan (dipanggil dari modal)
    public function gantiBulan()
    {
        return $this->redirect('/datinkes/'. $this->komp );
    }
    
    public function render()
    {
        return view('livewire.datinkes-komponen', [
            'program' => ProgramKesehatan::find($this->komp),
            'komponen' => KomponenProgram::where('id_program', $this->komp)->get()
        ]);
    }
}
