<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataIndikator extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function indi(): BelongsTo
    {
        return $this->belongsTo(MasterIndikator::class, 'id_master_indikator');
    }

    public function desa(): BelongsTo
    {
        return $this->belongsTo(desa::class, 'id_author');
    }
}
