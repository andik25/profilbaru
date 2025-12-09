<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Operators;
use App\Models\KolomTabel;
use App\Models\MasterIndikator;
use App\Models\MasterKategoriIndikator;
use App\Models\MasterTabel;
use App\Models\ModelKolomDetail;

class KolomDetail extends Component
{
    public $id_tabel;
    public $id_kolom;
    public $kategoriId;
    public $indikators = [];
    public $idindikators;
    public $type;
    public $operator = [];

    public $koldets;
    public $koldetToDeleteId = null;
    public $koldetToDeleteName = null;
    public $sumberdata = '';
    public $showForm1 = false;
    public $showForm2 = false;

    public function mount($id, $det)
    {
        $this->id_tabel = $id;
        $this->id_kolom = $det;
        $this->type = KolomTabel::find($this->id_kolom)->tipe;
        $this->koldets = ModelKolomDetail::where('id_kolom', $det)->get();
    }

    public function updatedSumberdata($value)
    {
        $this->showForm1 = $value === '1';
        $this->showForm2 = $value === '2';
    }

    public function confirmDelete($id)
    {
        $program = ModelKolomDetail::find($id);
        if ($program) {
            $this->koldetToDeleteId = $id;
            $this->koldetToDeleteName = $program->id;
        }
    }

    public function delete()
    {
        if ($this->koldetToDeleteId !== null) {
            ModelKolomDetail::destroy($this->koldetToDeleteId); // Hapus program dari database
            session()->flash('message', 'Program berhasil dihapus.');
            $this->koldetToDeleteId = null;
            $this->koldetToDeleteName = null;
            // Refresh daftar program
            $this->koldets = ModelKolomDetail::where('id_kolom', $this->id_kolom)->get();
        }
    }

    public function cancelDelete()
    {
        $this->koldetToDeleteId = null;
        $this->koldetToDeleteName = null;
    }

    public function updatedKategoriId($kategoriId)
    {
        $this->indikators = MasterIndikator::where('id_kategori_indikator', $kategoriId)->get();
    }

    public function render()
    {
        return view('livewire.kolom-detail', [
            'kategori' => MasterKategoriIndikator::all(),
            'operatora' => Operators::where('tipe_operator', $this->type)->get(),
            'kolom_details' => ModelKolomDetail::with('opr')->where('id_kolom', $this->id_kolom)->get(),
            'mastables' => MasterTabel::find($this->id_tabel)
        ]);
    }

    public function close()
    {
        // $this->reset();
        // $this->dispatch('modal');
        return $this->redirect('/tabel/' . $this->id_tabel . '/' . $this->id_kolom);
    }

    public function MasIndi($kd)
    {
        $this->operator = $kd['operator'];
        $this->kategoriId = $kd['kategoriId'];
        $this->idindikators = $kd['idindikators'];
    }

    public function simpanKolom()
    {
        $this->validate([
            'operator' => 'required',
            'idindikators' => 'required',
        ]);

        $data = [
            'id_tabel' => $this->id_tabel,
            'id_kolom' => $this->id_kolom,
            'tipe' => $this->type,
            'operator' => $this->operator,
            'id_indikator' => $this->idindikators,
            'id_kategori' => $this->kategoriId,
        ];

        ModelKolomDetail::create($data);
        return $this->redirect('/tabel/' . $this->id_tabel . '/' . $this->id_kolom);
        // $this->id_kategori_indikator = null;
        // $this->nama_kategori = null;
    }
}
