<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KomponenProgram extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategori(): HasMany
    {
        return $this->hasMany(MasterKategoriIndikator::class, 'id_komponen');
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(ProgramKesehatan::class, 'id_program');
    }
}
