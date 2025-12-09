<?php

namespace App\Livewire;

use Ramsey\Uuid\Uuid;
use Livewire\Component;
use App\Models\DataTabel;
use App\Models\MasterTabel;
use App\Models\MasterIndikator;

class Tabeldata extends Component
{
    public $idtabeldata;
    public $data_tabel;
    public $id_master_tabel;
    public $id_master_indikator;
    public $tahun;


    public function render()
    {
        return view('livewire.tabeldata', [
            'tab_dat' => DataTabel::with('masta')->orderBy('created_at', 'desc')->paginate(10),
            'mas_indi' => MasterIndikator::get(),
            'mas_tab' => MasterTabel::get(),
        ]);
    }

    public function close()
    {
        $this->reset();
        $this->dispatch('modal');
    }

    public function simpanTabel()
    {
        $this->validate([
            'data_tabel' => 'required',
            'id_master_tabel' => 'required',
            'id_master_indikator' => 'required',
            'tahun' => 'required',

        ]);

        $data = [
            'id_data_tabel' => $this->data_tabel,
            'id_master_tabel' => $this->id_master_tabel,
            'id_master_indikator' => $this->id_master_indikator,
            'tahun' => $this->tahun,
        ];

        DataTabel::create($data);
        return $this->redirect('/tabel-data');
        // $this->id_kategori_indikator = null;
        // $this->nama_kategori = null;
    }
}
