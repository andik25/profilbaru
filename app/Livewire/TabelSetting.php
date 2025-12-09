<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MasterTabel;
use App\Models\RoleProgram;
use Illuminate\Support\Str;
use App\Models\MasterIndikator;

class TabelSetting extends Component
{
    public $title;
    public $id_kolom;
    public $tabindi;
    public $master_tabel;
    public $nama_tabel;
    public $alias;
    public $judul_tabel;
    public $status;
    public $items = [];
    public $master_kategori;

    public $tabels;
    public $tabelToDeleteId = null;
    public $tabelToDeleteName = null;

    public function mount()
    {
        $this->tabels = MasterTabel::all();
    }

    public function confirmDelete($id)
    {
        $program = MasterTabel::find($id);
        if ($program) {
            $this->tabelToDeleteId = $id;
            $this->tabelToDeleteName = $program->nama_tabel;
        }
    }

    public function delete()
    {
        if ($this->tabelToDeleteId !== null) {
            MasterTabel::destroy($this->tabelToDeleteId); // Hapus program dari database
            session()->flash('message', 'Program berhasil dihapus.');
            $this->tabelToDeleteId = null;
            $this->tabelToDeleteName = null;
            // Refresh daftar program
            $this->tabels = MasterTabel::all();
        }
    }

    public function cancelDelete()
    {
        $this->tabelToDeleteId = null;
        $this->tabelToDeleteName = null;
    }

    public function updatedTitle($value)
    {
        $this->id_kolom = Str::slug($value);
    }

    public function addItem()
    {
        $this->items[] = ['id_kategori' => '', 'user_id' => ''];
    }

    public function removeItem($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items); // Reindex array
    }

    public function submit()
    {
        $this->validateItems();
        // Validasi dan simpan data ke database
        RoleProgram::insert($this->items);
        session()->flash('message', 'User  registered successfully!');
        $this->reset();
    }

    public function validateItems()
    {
        // Validasi untuk memastikan tidak ada kategori yang sama
        $this->validate([
            'items.*.id_kategori' => 'required|distinct',
        ],[
            'items.*.id_kategori.required' => 'Kategori Harus dipilih.',
            'items.*.id_kategori.distinct' => 'Kategori tidak boleh sama.',
        ]);

        // Cek untuk duplikasi
        $kategoriIds = array_column($this->items, 'id_kategori');
        if (count($kategoriIds) !== count(array_unique($kategoriIds))) {
            $this->addError('items', 'Kategori tidak boleh sama.'); // Menambahkan error
        }
    }

    public function render()
    {
        return view('livewire.tabel-setting', [
            'tas_set' => MasterTabel::orderBy('created_at', 'desc')->get(),
            'indikators' => MasterIndikator::get()
        ]);
    }

    public function simpanTabel()
    {
        $this->validate([
            'master_tabel' => 'required',
            'nama_tabel' => 'required',
            'alias' => 'required',
            'judul_tabel' => 'required',
            'status' => 'required',

        ]);

        $data = [
            'id_master_tabel' => $this->master_tabel,
            'nama_tabel' => $this->nama_tabel,
            'alias' => $this->alias,
            'judul_tabel' => $this->judul_tabel,
            'status' => $this->status,
        ];

        MasterTabel::create($data);
        return $this->redirect('/tabel');
        // $this->id_kategori_indikator = null;
        // $this->nama_kategori = null;
    }

    public function MasIndi($masindi)
    {
        $this->tabindi = $masindi['id'];
        $this->master_tabel = $masindi['id_master_tabel'];
        $this->nama_tabel = $masindi['nama_tabel'];
        $this->alias = $masindi['alias'];
        $this->judul_tabel = $masindi['judul_tabel'];
        $this->status = $masindi['status'];
    }

    public function TabelDetail($mas)
    {
        $this->tabindi = $mas['id'];
        $this->master_tabel = $mas['id_master_tabel'];
        $this->nama_tabel = $mas['nama_tabel'];
        $this->alias = $mas['alias'];
        $this->judul_tabel = $mas['judul_tabel'];
        $this->status = $mas['status'];
    }

    public function close()
    {
        $this->reset();
        $this->dispatch('modal');
    }

    public function Tabindiupdate()
    {
        $this->validate([
            'master_tabel' => 'required',
            'nama_tabel' => 'required',
            'alias' => 'required',
            'judul_tabel' => 'required',
            'status' => 'required',
        ]);

        $data = [
           'id_master_tabel' => $this->master_tabel,
            'nama_tabel' => $this->nama_tabel,
            'alias' => $this->alias,
            'judul_tabel' => $this->judul_tabel,
            'status' => $this->status,
        ];

        MasterTabel::where('id', $this->tabindi)->update($data);
        return $this->redirect('/tabel');
    }
}
