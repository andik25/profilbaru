<?php

namespace App\Models;

use App\Models\ModelKolomDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KolomTabel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function koldetail(): HasMany
    {
        return $this->hasMany(ModelKolomDetail::class, 'id_kolom');
    }

    public function tipe_kolom(): BelongsTo
    {
        return $this->belongsTo(TipeKolom::class, 'tipe');
    }
}
