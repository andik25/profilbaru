<?php

namespace App\Livewire;

use App\Models\KomponenProgram;
use App\Models\MasterKategoriIndikator;
use App\Models\PjProgrmas;
use App\Models\ProgramKesehatan;
use App\Models\User;
use Livewire\Component;

class UserProgram extends Component
{

    public $user_pro;
    public $pjprogramer = [];
    public $programs = [];
    public $programer = null;
    public $komponen = [];
    public $komponens = null;
    public $kategoripj = null;
    public $kategoripjs = [];
    public $showModal = false;

    public $programToDeleteId = null;
    public $programToDeleteName = null;

    public function mount($pro)
    {
        $this->programs = ProgramKesehatan::all();
        $this->pjprogramer = PjProgrmas::with('kateg')->where('id_user', $pro)->get();
        $this->user_pro = $pro;
    }

    public function confirmDelete($id)
    {
        $program = PjProgrmas::find($id);
        if ($program) {
            $this->programToDeleteId = $id;
            $this->programToDeleteName = $program->kateg->nama_kategori;
        }
    }

    public function cancelDelete()
    {
        $this->programToDeleteId = null;
        $this->programToDeleteName = null;
    }

    public function delete()
    {
        if ($this->programToDeleteId !== null) {
            PjProgrmas::destroy($this->programToDeleteId); // Hapus program dari database
            session()->flash('message', 'Program berhasil dihapus.');
            $this->programToDeleteId = null;
            $this->programToDeleteName = null;
            // Refresh daftar program
            $this->pjprogramer = PjProgrmas::with('kateg')->where('id_user', $this->user_pro)->get();
        }
    }

    public function updatedProgramer($programId)
    {
        // Mengupdate komponen berdasarkan program yang dipilih
            $this->komponen = KomponenProgram::where('id_program', $programId)->get();
            $this->komponens = null; // Reset komponen yang dipilih
            $this->kategoripj = null; // Reset komponen yang dipilih
    }

    public function updatedKomponens($komponenId)
    {
        // Mengupdate komponen berdasarkan program yang dipilih
            $this->kategoripjs = MasterKategoriIndikator::where('id_komponen', $komponenId)->get();
            $this->kategoripj = null; // Reset komponen yang dipilih
    }

    public function close()
    {
        // Reset semua properti jika modal ditutup
        $this->reset(['programer', 'komponen', 'komponens', 'kategoripj']);
    }

    public function simpanProgrampj()
    {
        $this->validate([
            'programer' => 'required',
            'komponens' => 'required',
            'kategoripj' => 'required',
        ], [
            'programer.required' => 'Silahkan pilih program terlebih dahulu !',
            'komponens.required' => 'Silahkan pilih komponen terlebih dahulu !',
            'kategoripj.required' => 'Silahkan pilih kategori terlebih dahulu !',
        ]);

        PjProgrmas::create([
            'id_user' => $this->user_pro,
            'id_program' => $this->programer,
            'id_komponen' => $this->komponens,
            'id_kategori' => $this->kategoripj
        ]);
        session()->flash('message', 'Post berhasil ditambahkan.');
        $this->resetInputFields();
        $this->pjprogramer = PjProgrmas::with('kateg')->where('id_user', $this->user_pro)->get();
        $this->showModal = false;
    }

    private function resetInputFields(){
        $this->programer = '';
        $this->komponens = '';
        $this->kategoripj = '';
    }

    public function render()
    {
        return view('livewire.user-program', [
            'user' => User::find($this->user_pro)
        ]);
    }
}
