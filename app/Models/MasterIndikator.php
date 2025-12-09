<?php

namespace App\Models;

use Illuminate\Support\Facades\Gate;
use App\Models\MasterKategoriIndikator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterIndikator extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategoriindikator(): BelongsTo
    {
        return $this->belongsTo(MasterKategoriIndikator::class, 'id_kategori_indikator');
    }

    public function tipeindikator(): BelongsTo
    {
        return $this->belongsTo(TipeIndikator::class, 'tipe_indikator');
    }


    public function isi(): HasMany
    {
        return $this->hasMany(DataIndikator::class, 'id_master_indikator')->where('tahun', session('thn'));
    }

    public function modelkoldet(): HasMany
    {
        return $this->hasMany(ModelKolomDetail::class, 'id_indikator');
    }
}
