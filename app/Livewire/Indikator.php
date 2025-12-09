<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TipeIndikator;
use App\Models\KomponenProgram;
use App\Models\MasterIndikator;
use App\Models\ProgramKesehatan;
use App\Models\MasterKategoriIndikator;

class Indikator extends Component
{
    public $masindikator;
    public $nama_indikator;
    public $kategori_indikator;
    public $tipe;
    public $gender;
    public $kom;
    public $komp;

    public $itu;
    public $indikators;
    public $indikatorToDeleteId = null;
    public $indikatorToDeleteName = null;

    public function mount($kom, $komp, $ind)
    {
        $this->itu = $ind;
        $this->kom = $kom;
        $this->komp = $komp;
        $this->indikators = MasterIndikator::where('id_kategori_indikator', $ind)->get();
    }

    public function confirmDelete($id)
    {
        $program = MasterIndikator::find($id);
        if ($program) {
            $this->indikatorToDeleteId = $id;
            $this->indikatorToDeleteName = $program->nama_indikator;
        }
    }

    public function delete()
    {
        if ($this->indikatorToDeleteId !== null) {
            MasterIndikator::destroy($this->indikatorToDeleteId); // Hapus program dari database
            session()->flash('message', 'Program berhasil dihapus.');
            $this->indikatorToDeleteId = null;
            $this->indikatorToDeleteName = null;
            // Refresh daftar program
            $this->indikators = MasterIndikator::where('id_kategori_indikator', $this->itu)->get();
        }
    }

    public function cancelDelete()
    {
        $this->indikatorToDeleteId = null;
        $this->indikatorToDeleteName = null;
    }

    public function render()
    {
        return view('livewire.indikator', [
            'program' => ProgramKesehatan::find($this->kom),
            'komponen' => KomponenProgram::find($this->komp),
            'kategorind' => MasterKategoriIndikator::find($this->itu),
            'kator' => MasterKategoriIndikator::get(),
            'tipe_indikator' => TipeIndikator::get(),
            'mas_in' => MasterIndikator::with('kategoriindikator', 'tipeindikator')->where('id_kategori_indikator', $this->itu)->orderBy('created_at', 'desc')->paginate(110)
        ]);
    }

    public function simpanIndikator()
    {
        $this->validate([
            'nama_indikator' => 'required',
            'tipe' => 'required',
        ]);
        $data = [];
        if ($this->gender == true) {
            $data[] = [
                'nama_indikator' => $this->nama_indikator,
                'id_kategori_indikator' => $this->itu,
                'tipe_indikator' => $this->tipe,
                'gender' => '1',
            ];
        } else {
            $data = [
                'nama_indikator' => $this->nama_indikator,
                'id_kategori_indikator' => $this->itu,
                'tipe_indikator' => $this->tipe,
                'gender' => '0',
            ];
        }
        MasterIndikator::insert($data);
        return $this->redirect('/program-kesehatan/' . $this->kom . '/' . $this->komp . '/' . $this->itu);
    }

    public function MasIndi($masindi)
    {
        $this->masindikator = $masindi['id'];
        $this->nama_indikator = $masindi['nama_indikator'];
        $this->kategori_indikator = $masindi['id_kategori_indikator'];
        $this->tipe = $masindi['tipe_indikator'];
    }

    public function Masindiupdate()
    {
        $this->validate([
            'nama_indikator' => 'required',
            'kategori_indikator' => 'required',
            'tipe' => 'required',
        ]);

        $data = [
            'nama_indikator' => $this->nama_indikator,
            'id_kategori_indikator' => $this->itu,
            'tipe_indikator' => $this->tipe,
        ];

        MasterIndikator::where('id', $this->masindikator)->update($data);
        return $this->redirect('/program-kesehatan/' . $this->kom . '/' . $this->komp . '/' . $this->itu);
    }
}
