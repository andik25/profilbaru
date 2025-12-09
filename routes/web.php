<?php

use App\Livewire\Lock;
use App\Livewire\Index;
use App\Livewire\Users;
use App\Livewire\Err404;
use App\Livewire\Err500;
use App\Livewire\Profil;
use App\Livewire\Report;
use App\Livewire\Laporan;
use App\Livewire\Profile;
use App\Livewire\Program;
use App\Livewire\Kematian;
use App\Livewire\Dashboard;
use App\Livewire\Fasyankes;
use App\Livewire\Indikator;
use App\Livewire\Tabeldata;
use App\Livewire\Auth\Login;
use App\Livewire\KolomTabel;
use App\Livewire\HalamanAwal;
use App\Livewire\KolomDetail;
use App\Livewire\UserProgram;
use App\Livewire\LoginExample;
use App\Livewire\TabelSetting;
use App\Livewire\Transactions;
use App\Livewire\UpgradeToPro;
use App\Livewire\Auth\Register;
use App\Livewire\ManajemenUser;
use App\Livewire\ResetPassword;
use App\Livewire\ProfileExample;
use Illuminate\Auth\Access\Gate;
use App\Livewire\BootstrapTables;
use App\Livewire\KomponenProgram;
use App\Livewire\RegisterExample;
use App\Livewire\DatinkesKategori;
use App\Livewire\DatinkesKomponen;
use App\Livewire\Components\Modals;
use App\Livewire\Components\Buttons;
use Illuminate\Support\Facades\Route;
use App\Livewire\ResetPasswordExample;
use App\Livewire\Components\Typography;
use App\Livewire\ForgotPasswordExample;
use App\Livewire\sampah\ForgotPassword;
use App\Livewire\MasterKategoriIndikator;
use App\Livewire\Components\Notifications;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::redirect('/', '/login');

Route::get('/register', Register::class)->name('register');
Route::get('/', HalamanAwal::class)->name('halaman-awal');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

// Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

// Route::get('/404', Err404::class)->name('404');
// Route::get('/500', Err500::class)->name('500');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/kelahiran', BootstrapTables::class)->name('kelahiran');
    Route::get('/kematian', Kematian::class)->name('kematian');
    // Route::get('/indikator', Indikator::class)->name('indikator');
    Route::get('/datinkes', Profil::class)->name('profil');
    Route::get('/datinkes/{kom}', DatinkesKomponen::class)->name('datinkes-komponen');
    Route::get('/datinkes/{kom}/{komp}', DatinkesKategori::class)->name('datinkes-kategori');
    Route::get('/datinkes/{kom}/{komp}/{id}', Fasyankes::class)->name('fasyankes');
    // Route::get('/datinkes/fasyankes/{id}', Fasyankes::class)->name('fasyankes');
    Route::get('/report', Report::class)->name('report');
    Route::get('/laporan', Laporan::class)->name('laporan');
    Route::get('/export', Laporan::class)->name('export');
    Route::get('/manajemen-user', ManajemenUser::class)->name('manajemen-user');
    Route::get('/manajemen-user/{pro}', UserProgram::class)->name('user-program');
});



Route::middleware('superadmin')->group(function () {
   
    Route::get('/kategori-indikator', MasterKategoriIndikator::class)->name('kategori-indikator');
    Route::get('/program-kesehatan', Program::class)->name('program-kesehatan');
    Route::get('/program-kesehatan/{kom}', KomponenProgram::class)->name('komponen-program');
    Route::get('/program-kesehatan/{kom}/{komp}', MasterKategoriIndikator::class)->name('maskat');
    Route::get('/program-kesehatan/{kom}/{komp}/{ind}', Indikator::class)->name('indikator');
    // Route::get('/kategori-indikator/{ind}', Indikator::class)->name('indikator');
    Route::get('/tabel', TabelSetting::class)->name('tabel-setting');
    Route::get('/tabel/{id}', KolomTabel::class)->name('kolom-tabel');
    Route::get('/tabel/{id}/{det}', KolomDetail::class)->name('kolom-detail');
    Route::get('/tabel-data', Tabeldata::class)->name('tabel-data');
});
