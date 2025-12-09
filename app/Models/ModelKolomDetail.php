<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelKolomDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function opr(): BelongsTo
    {
        return $this->belongsTo(Operators::class, 'operator');
    }

    public function kateg(): BelongsTo
    {
        return $this->belongsTo(MasterKategoriIndikator::class, 'id_kategori');
    }
    
    public function indik(): BelongsTo
    {
        return $this->belongsTo(MasterIndikator::class, 'id_indikator');
    }
}
