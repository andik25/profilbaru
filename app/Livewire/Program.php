<?php

namespace App\Livewire;

use App\Models\Iconic;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MasterProgram;
use App\Models\ProgramKesehatan;

class Program extends Component
{

    public $program_id;
    public $icon;
    public $id_kategori_indikator;
    public $nama_program;

    use WithPagination;

    public $programs;
    public $ikons;
    public $search;
    public $programToDeleteId = null;
    public $programToDeleteName = null;

    public function mount()
    {
        $this->programs = ProgramKesehatan::all(); // Ambil semua data dari tabel
        
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmDelete($id)
    {
        $program = ProgramKesehatan::find($id);
        if ($program) {
            $this->programToDeleteId = $id;
            $this->programToDeleteName = $program->nama_program;
        }
    }

    public function delete()
    {
        if ($this->programToDeleteId !== null) {
            ProgramKesehatan::destroy($this->programToDeleteId); // Hapus program dari database
            session()->flash('message', 'Program berhasil dihapus.');
            $this->programToDeleteId = null;
            $this->programToDeleteName = null;
            // Refresh daftar program
            $this->programs = ProgramKesehatan::all();
        }
    }

    public function cancelDelete()
    {
        $this->programToDeleteId = null;
        $this->programToDeleteName = null;
    }

    public function render()
    {
        return view('livewire.program', [
            'pro' => ProgramKesehatan::orderBy('created_at', 'desc')->paginate(20),
            'ikonstol' => Iconic::where('sebutan', 'LIKE', '%' . $this->search . '%')->get()
        ]);
    }

    public function ikonSimpan()
    {
        $this->validate([
            'icon' => 'required',
        ]);

        $data = [
            'icon' => $this->icon,
        ];

        ProgramKesehatan::where('id', $this->program_id)->update($data);
        return $this->redirect(route('program-kesehatan'));
    }

    public function simpan()
    {
        $this->validate([
            'nama_program' => 'required'
        ]);

        $data = [
            'nama_program' => $this->nama_program
        ];

        ProgramKesehatan::create($data);
        return $this->redirect('/program-kesehatan');
        // $this->id_kategori_indikator = null;
        // $this->nama_kategori = null;
    }

    public function ProgramEdit($m)
    {
        $this->program_id = $m['id'];
        $this->nama_program = $m['nama_program'];
    }

    public function ProgramUpdate()
    {
        $this->validate([
            'nama_program' => 'required',
        ]);

        $data = [
            'nama_program' => $this->nama_program,
        ];

        ProgramKesehatan::where('id', $this->program_id)->update($data);
        return $this->redirect(route('program-kesehatan'));
    }

    public function ProgramDelete($id_program)
    {
        $program = ProgramKesehatan::find($id_program);
        if ($program) {
            // Delete the program
            $program->delete();
            // Optionally, emit an event or session flash message to notify successful deletion
            session()->flash('message', 'Program berhasil dihapus.');
            // You might want to refresh the data list or reset some properties here
            // e.g., $this->emit('programDeleted');
        } else {
            // Program not found: optionally notify or handle error
            session()->flash('error', 'Program tidak ditemukan.');
        }
    }
}
