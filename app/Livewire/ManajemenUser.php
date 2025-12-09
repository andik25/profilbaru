<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\RoleProgram;
use App\Models\TingkatUser;
use Livewire\WithPagination;
use App\Models\KomponenProgram;
use Illuminate\Validation\Rule;
use App\Models\ProgramKesehatan;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Models\MasterKategoriIndikator;

class ManajemenUser extends Component
{
    public $user_id;
    public $nama_user;
    public $email;
    public $password;
    public $password_confirmation;
    public $tingkat;
    public $search;
    use WithPagination, WithoutUrlPagination;


    public $items = [];
    public $butirs = [];
    public $master_kategori;

    public function mount()
    {

        // Ambil kategori dari database
        $this->master_kategori = Kecamatan::all();
        // Handle pagination manually for Livewire compatibility


    }

    public function addItem()
    {
        $this->items[] = ['id_kec' => '', 'user_id' => $this->user_id];
    }

    public function addButir()
    {
        $this->butirs[] = ['program' => '', 'komponen' => '', 'kategori' => ''];
    }

    public function updatedButirs($index, $value)
    {

        // Jika program dipilih, ambil kecamatan
        if (isset($value['program'])) {
            $this->butirs[$index]['komponen'] = null; // Reset kecamatan
            $this->butirs[$index]['ketegori'] = null; // Reset desa
            $this->butirs[$index]['komponens'] = KomponenProgram::where('id_program', $value['program'])->get();
        }
        // Jika kecamatan dipilih, ambil desa
        if (isset($value['kecamatan'])) {
            $this->butirs[$index]['desa'] = null; // Reset desa
            $this->butirs[$index]['desas'] = MasterKategoriIndikator::where('kecamatan_id', $value['kecamatan'])->get();
        }
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
            'items.*.id_kec' => 'required|distinct',
        ], [
            'items.*.id_kec.required' => 'Kategori Harus dipilih.',
            'items.*.id_kec.distinct' => 'Kategori tidak boleh sama.',
        ]);

        // Cek untuk duplikasi
        $kategoriIds = array_column($this->items, 'id_kec');
        if (count($kategoriIds) !== count(array_unique($kategoriIds))) {
            $this->addError('items', 'Kategori tidak boleh sama.'); // Menambahkan error
        }
    }

    public function render()
    {
        if (Gate::allows('super_admin')) {
            $peng = User::where('name', 'LIKE', '%' . $this->search . '%')->paginate(8);
        } elseif (Gate::allows('kecamatan')) {
            $kecamatun = Kecamatan::with(['desa', 'role'])->where('user_id', auth()->user()->id)->first();
            $roleuserid = $kecamatun->role->pluck('user_id')->toArray();
            $desaUserIds = $kecamatun->desa->pluck('user_id')->toArray();
            $intersectId = array_merge($roleuserid, $desaUserIds);
            $peng = User::with('ting')->where('name', 'LIKE', '%' . $this->search . '%')->whereIn('id', $intersectId)->paginate(8);
        }
        return view('livewire.manajemen-user', [
            'pengguna' => $peng,
            'tingkat_users' => TingkatUser::get(),
            'master_kategori' => $this->master_kategori,
            'role_program' => RoleProgram::where('user_id', $this->user_id)->get(),
            'programs' => ProgramKesehatan::all()
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function simpanTambahUser()
    {
        $this->validate([
            'nama_user' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'tingkat' => 'required',
        ]);
        User::create([
            'name' => $this->nama_user,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'tingkat' => auth()->user()->tingkat == 2 ? 5 : $this->tingkat,
        ]);

        if (Gate::allows('kecamatan')) {
            RoleProgram::create([
                'user_id' => User::where('email', $this->email)->first()->id,
                'id_kec' => Kecamatan::where('user_id', auth()->user()->id)->first()->id
            ]);
        }

        session()->flash('message', 'Tambah User Berhasil disimpan!');
        $this->reset();
        return $this->redirect('/manajemen-user');
    }

    public function MasIndi($masindi)
    {
        $tingkatan = TingkatUser::find($masindi['tingkat']);
        $this->user_id = $masindi['id'];
        $this->nama_user = $masindi['name'];
        $this->email = $masindi['email'];
        $this->tingkat = $tingkatan->posisi;
    }

    public function Masindiupdate()
    {
        $this->validate([
            'nama_user' => 'required',
            'email' => 'required|email',
        ]);

        $data = [
            'name' => $this->nama_user,
            'email' => $this->email,
        ];

        User::where('id', $this->user_id)->update($data);
        return $this->redirect(route('manajemen-user'));
    }

    public function resetPassword() {
    $this->validate([
        'password' => 'required|min:8|confirmed',
    ]);
    // Logika reset password, misalnya:
    $user = User::find($this->user_id); // Asumsi Anda punya user ID
    $user->update(['password' => Hash::make($this->password)]);
    session()->flash('message', 'Password berhasil direset.');
    $this->reset(); // Bersihkan form
    return $this->redirect(route('manajemen-user'));
}

    public function getAvailableCategories($index)
    {
        // Ambil kategori yang sudah dipilih
        $selectedCategories = array_column($this->items, 'id_kategori');

        // Filter kategori yang sudah dipilih
        return $this->master_kategori->whereNotIn('id', $selectedCategories);
    }
}
