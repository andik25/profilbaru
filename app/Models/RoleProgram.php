<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleProgram extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function role(): BelongsTo
    {
        return $this->belongsTo(MasterKategoriIndikator::class, 'id_kategori');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pus(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'id_kec');
    }
}
