<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PjProgrmas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kateg(): BelongsTo
    {
        return $this->belongsTo(MasterKategoriIndikator::class, 'id_kategori');
    }

    public function kompon(): BelongsTo
    {
        return $this->belongsTo(KomponenProgram::class, 'id_komponen');
    }

    public function progr(): BelongsTo
    {
        return $this->belongsTo(ProgramKesehatan::class, 'id_program');
    }
}
