<?php

namespace App\Livewire;

use App\Models\KomponenProgram as ModelsKomponenProgram;
use App\Models\ProgramKesehatan;
use Livewire\Component;

class KomponenProgram extends Component
{

    public $komp;
    public $nama_komponen;

    public $komponens;
    public $komponenToDeleteId = null;
    public $komponenToDeleteName = null;

    
    public function mount($kom)
    {
        $this->komp = $kom;
        $this->komponens = ModelsKomponenProgram::where('id_program', $this->komp)->get();
    }

    public function confirmDelete($id)
    {
        $program = ModelsKomponenProgram::find($id);
        if ($program) {
            $this->komponenToDeleteId = $id;
            $this->komponenToDeleteName = $program->nama_komponen;
        }
    }

    public function delete()
    {
        if ($this->komponenToDeleteId !== null) {
            ModelsKomponenProgram::destroy($this->komponenToDeleteId); // Hapus program dari database
            session()->flash('message', 'Program berhasil dihapus.');
            $this->komponenToDeleteId = null;
            $this->komponenToDeleteName = null;
            // Refresh daftar program
            $this->komponens = ModelsKomponenProgram::where('id_program', $this->komp)->get();
        }
    }

    public function cancelDelete()
    {
        $this->komponenToDeleteId = null;
        $this->komponenToDeleteName = null;
    }

    public function render()
    {
        return view('livewire.komponen-program', [
            'komponen' => ProgramKesehatan::find($this->komp),
            'kom' => ModelsKomponenProgram::where('id_program', $this->komp)->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function simpan()
    {
        $this->validate([
            'nama_komponen' => 'required'
        ]);

        $data = [
            'id_program' => $this->komp,
            'nama_komponen' => $this->nama_komponen
        ];

        ModelsKomponenProgram::create($data);
        return $this->redirect('/program-kesehatan/'. $this->komp);
        // $this->id_kategori_indikator = null;
        // $this->nama_kategori = null;
    }
}
