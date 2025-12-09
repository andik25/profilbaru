<?php

namespace App\Livewire;

use App\Models\KomponenProgram;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MasterKategoriIndikator as ModelMki;
use App\Models\ProgramKesehatan;
use App\Models\TingkatUser;

class MasterKategoriIndikator extends Component
{
    public $mki_id;
    public $nama_kategori;
    public $pengisi;
    public $kom;
    public $komp;

    use WithPagination;
    public $kategories;
    public $kategoriToDeleteId = null;
    public $kategoriToDeleteName = null;

    
    public function mount($kom, $komp)
    {
        $this->kom = $kom;
        $this->komp = $komp;
        $this->kategories = ModelMki::where('id_komponen', $this->komp)->get();
    }

    public function confirmDelete($id)
    {
        $program = ModelMki::find($id);
        if ($program) {
            $this->kategoriToDeleteId = $id;
            $this->kategoriToDeleteName = $program->nama_kategori;
        }
    }

    public function delete()
    {
        if ($this->kategoriToDeleteId !== null) {
            ModelMki::destroy($this->kategoriToDeleteId); // Hapus program dari database
            session()->flash('message', 'Program berhasil dihapus.');
            $this->kategoriToDeleteId = null;
            $this->kategoriToDeleteName = null;
            // Refresh daftar program
            $this->kategories = ModelMki::where('id_komponen', $this->komp)->get();
        }
    }

    public function cancelDelete()
    {
        $this->kategoriToDeleteId = null;
        $this->kategoriToDeleteName = null;
    }


    public function render()
    {
        return view('livewire.master-kategori-indikator', [
            'program' => ProgramKesehatan::find($this->kom),
            'komponen' => KomponenProgram::find($this->komp),
            'mki' => ModelMki::with('tingkatusers')->where('id_komponen', $this->komp)->orderBy('created_at', 'desc')->paginate(31),
            'tingkat_user' => TingkatUser::get()
        ]);
    }

    public function simpan()
    {
        $this->validate([
            'nama_kategori' => 'required',
            'pengisi' => 'required',
        ]);

        $data = [
            'id_komponen' => $this->komp,
            'nama_kategori' => $this->nama_kategori,
            'jenis' => $this->pengisi,
            'proy' => $this->kom == 4 ? 1 : 0
        ];

        ModelMki::create($data);
        return $this->redirect(route('maskat', ['kom' => $this->kom, 'komp' => $this->komp]));
        // $this->id_kategori_indikator = null;
        // $this->nama_kategori = null;
    }

    public function Mkiedit($mki)
    {
        $this->mki_id = $mki['id'];
        $this->nama_kategori = $mki['nama_kategori'];
        $this->pengisi = $mki['jenis'];
    }

    public function Mkiupdate()
    {
        $this->validate([
            'nama_kategori' => 'required',
            'pengisi' => 'required'
        ]);

        $data = [
            'id_komponen' => $this->komp,
            'nama_kategori' => $this->nama_kategori,
            'jenis' => $this->pengisi
        ];

        ModelMki::where('id', $this->mki_id)->update($data);
        return $this->redirect(route('maskat', ['kom' => $this->kom, 'komp' => $this->komp]));
    }
}
