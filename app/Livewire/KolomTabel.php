<?php

namespace App\Livewire;

use App\Models\KolomTabel as ModelsKolomTabel;
use App\Models\MasterIndikator;
use App\Models\MasterKategoriIndikator;
use App\Models\MasterTabel;
use App\Models\Operators;
use Livewire\Component;

class KolomTabel extends Component
{

    public $iki;
    public $kolom_id;
    public $nama_kolom;
    public $tipe;
    public $kategoriId;
    public $indikators = [];
    public $items = [];

    public $koloms;
    public $kolomToDeleteId = null;
    public $kolomToDeleteName = null;

    public function mount($id)
    {
        $this->iki = $id;
        $this->koloms = ModelsKolomTabel::where('id_tabel', $id)->get();
    }

    public function confirmDelete($id)
    {
        $program = ModelsKolomTabel::find($id);
        if ($program) {
            $this->kolomToDeleteId = $id;
            $this->kolomToDeleteName = $program->nama_kolom;
        }
    }

    public function delete()
    {
        if ($this->kolomToDeleteId !== null) {
            ModelsKolomTabel::destroy($this->kolomToDeleteId); // Hapus program dari database
            session()->flash('message', 'Program berhasil dihapus.');
            $this->kolomToDeleteId = null;
            $this->kolomToDeleteName = null;
            // Refresh daftar program
            $this->koloms = ModelsKolomTabel::where('id_tabel', $this->iki)->get();
        }
    }

    public function cancelDelete()
    {
        $this->kolomToDeleteId = null;
        $this->kolomToDeleteName = null;
    }

    public function addItem()
    {
        $this->items[] = ['operator' => '', 'kategoriId' => ''];
        $this->indikators[] = [];
    }

    public function removeItem($index)
    {
        unset($this->items[$index]);
        unset($this->indikators[$index]);
        $this->items = array_values($this->items); // Reindex array
        $this->indikators = array_values($this->indikators);
    }

    public function updatedItems($index, $value)
    {
        // Jika kategoriId diubah, ambil indikator yang sesuai
        if (isset($this->items[$index]['kategoriId'])) {
            $this->indikators[$index] = MasterIndikator::where('id_kategori_indikator', $this->items[$index]['kategoriId'])->get();
        }
    }

    // public function updatedKategoriId($kategoriId)
    // {
    //     $this->indikators = MasterIndikator::where('id_kategori_indikator', $kategoriId)->get();
    // }

    public function render()
    {
        return view('livewire.kolom-tabel', [
            'kolom' => ModelsKolomTabel::with('tipe_kolom')->where('id_tabel', $this->iki)->get(),
            'namatabel' => MasterTabel::find($this->iki),
            'kategori' => MasterKategoriIndikator::all(),
            'operator' => Operators::where('tipe_operator', $this->tipe)->get(),
        ]);
    }

    public function close()
    {
        // $this->reset();
        // $this->dispatch('modal');
        return $this->redirect('/tabel/' . $this->iki);
    }

    public function simpanKolom()
    {
        $this->validate([
            'nama_kolom' => 'required',
            'tipe' => 'required',
        ]);

        $data = [
            'id_tabel' => $this->iki,
            'nama_kolom' => $this->nama_kolom,
            'tipe' => $this->tipe,
        ];

        ModelsKolomTabel::create($data);
        return $this->redirect('/tabel/' . $this->iki);
        // $this->id_kategori_indikator = null;
        // $this->nama_kategori = null;
    }

    public function MasIndi($kolom)
    {
        $this->kolom_id = $kolom['id'];
        $this->nama_kolom = $kolom['nama_kolom'];
        $this->tipe = $kolom['tipe'];
    }

    public function updateKolom()
    {
        $this->validate([
            'nama_kolom' => 'required',
            'tipe' => 'required',
        ]);

        $data = [
            'id_tabel' => $this->iki,
            'nama_kolom' => $this->nama_kolom,
            'tipe' => $this->tipe,
        ];

        ModelsKolomTabel::where('id', $this->kolom_id)->update($data);
        return $this->redirect('/tabel/' . $this->iki);
    }
}
