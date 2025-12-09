<?php

namespace App\Models;

use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class desa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function kec(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'id_kec');
    }

    public function dus(): HasMany
    {
        return $this->hasMany(Dusun::class, 'id_desa');
    }

    public function valid(): HasMany
    {
        return $this->hasMany(Validasi::class, 'id_author')->where('tahun', session('thn'));
    }

    public function valid_din(): HasOne
    {
        return $this->hasOne(ValidasiDinkes::class, 'id_author', 'id_kec')->where('tahun', session('thn'));
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function isi()
    {
        if (Gate::allows('kecamatan')) {
        return $this->hasMany(DataIndikator::class, 'id_author')->where('tahun', session('thn'));
        }

        elseif (Gate::allows('pj_pkm')) {
        return $this->hasMany(DataIndikator::class, 'id_author')->where('tahun', session('thn'));
        }

        elseif (Gate::allows('desa')) {
        return $this->hasMany(DataIndikator::class, 'id_author')->where('tahun', session('thn'));
        }

        elseif (Gate::allows('dinkes')) {
        return $this->hasMany(DataIndikator::class, 'id_author');
        }

    }
}
