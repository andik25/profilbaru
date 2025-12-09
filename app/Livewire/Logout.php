<?php

namespace App\Livewire;

use App\Http\Livewire\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout() {
        session()->flush();
        auth()->logout();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
