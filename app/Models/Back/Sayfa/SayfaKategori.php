<?php

namespace App\Models\Back\Sayfa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SayfaKategori extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "sayfa_kategorileri";

    public function altKategorileri()
    {
        return $this->hasMany(SayfaKategori::class, 'ust_id', 'id');
    }

    public function kacSayfaVar()
    {
        return $this->hasMany(Sayfa::class, 'kategori_id', 'id');
    }

    public function ustKategorisi()
    {
        return $this->belongsTo(SayfaKategori::class, 'ust_id', 'id');
    }
}
