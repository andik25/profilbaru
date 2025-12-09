<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TingkatUser extends Model
{
    use HasFactory;

    public function role(): HasMany
    {
        return $this->hasMany(User::class, 'tingkat');
    }

    public function kategori(): HasMany
    {
        return $this->hasMany(MasterKategoriIndikator::class, 'jenis');
    }
}
