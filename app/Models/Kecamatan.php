<?php

namespace App\Models;

use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function valid_dinkes(): HasMany
    {
        return $this->hasMany(Validasi::class, 'id_author')->where('bulan', session('bln'))->where('tahun', session('thn'));
    }

    public function valid_dinas_kesehatan(): HasMany
    {
        return $this->hasMany(ValidasiDinkes::class, 'id_author')->where('tahun', session('thn'));
    }

    public function des(): HasMany
    {
        return $this->hasMany(desa::class, 'id_kec')->where('jenis', 0);
    }

    public function desa(): HasMany
    {
        return $this->hasMany(desa::class, 'id_kec');
    }

    public function jml_des(): HasMany
    {
        return $this->hasMany(desa::class, 'id_kec');
    }


    public function kelu(): HasMany
    {
        return $this->hasMany(desa::class, 'id_kec')->where('jenis', 1);
    }

    public function indikator(): HasMany
    {
        return $this->hasMany(DataIndikator::class, 'id_kec');
    }

    public function role(): HasMany
    {
        return $this->hasMany(RoleProgram::class, 'id_kec');
    }

    public function isi()
    {
        if (Gate::allows('dinkes')) {
            return $this->hasManyThrough(DataIndikator::class, desa::class, 'id_kec', 'id_author')->where('tahun', session('thn'));
        }
        if (Gate::allows('pj_dinkes')) {
            return $this->hasManyThrough(DataIndikator::class, desa::class, 'id_kec', 'id_author')->where('tahun', session('thn'));
        }
        if (Gate::allows('desa')) {
            return $this->hasMany(DataIndikator::class, 'id_author');
        }
        if (Gate::allows('super_admin')) {
            return $this->hasManyThrough(DataIndikator::class, desa::class, 'id_kec', 'id_author')->where('tahun', session('thn'));
        }
    }

    public function valid()
    {
        if (Gate::allows('pj_dinkes')) {
            return $this->hasManyThrough(Validasi::class, desa::class, 'id_kec', 'id_author')->where('tahun', session('thn'));
        }
        if (Gate::allows('super_admin')) {
            return $this->hasManyThrough(Validasi::class, desa::class, 'id_kec', 'id_author')->where('tahun', session('thn'));
        }
    }

    public function valid_suad()
    {
        if (Gate::allows('super_admin')) {
            return $this->hasMany(ValidasiDinkes::class, 'id_author')->where('tahun', session('thn'));
        }
    }
}
