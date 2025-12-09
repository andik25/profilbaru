<?php

namespace App\Livewire;

use App\Models\desa;
use Livewire\Component;
use Livewire\Attributes\Session;

class Dashboard extends Component
{
    #[Session(key: 'thn')]
    public $tahuna;

    #[Session(key: 'bln')]
    public $bln;

    public $proyeks = 4;

    public function proyeksisaja()
    {
        return $this->redirect('/datinkes/4');
    }

    public function render()
    {
        return view('dashboard', [
            'desa' => desa::where('user_id', auth()->user()->id)->first(),
            'proyeksisa' => 4
        ]);
    }

    public function gantiBulan()
    {
        return $this->redirect('/datinkes');
    }

    
}
