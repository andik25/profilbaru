<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataTabel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function masta(): BelongsTo
    {
        return $this->belongsTo(MasterTabel::class, 'id_master_tabel');
    }

    public function masdi(): BelongsTo
    {
        return $this->belongsTo(MasterIndikator::class, 'id_master_indikator');
    }
}
