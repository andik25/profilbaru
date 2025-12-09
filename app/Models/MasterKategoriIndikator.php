<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterKategoriIndikator extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function indi(): HasMany
    {
        return $this->hasMany(MasterIndikator::class, 'id_kategori_indikator');
    }

    public function validasipkm(): HasMany
    {
        return $this->hasMany(Validasi::class, 'id_kategori');
    }

    public function role(): HasMany
    {
        return $this->hasMany(RoleProgram::class, 'id_kategori');
    }

    public function komponen(): BelongsTo
    {
        return $this->belongsTo(KomponenProgram::class, 'id_komponen');
    }

    public function tingkatusers(): BelongsTo
    {
        return $this->belongsTo(TingkatUser::class, 'jenis');
    }
}
