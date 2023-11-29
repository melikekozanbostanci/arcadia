<?php

namespace App\Models\Front\Urun;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrunKategorileri extends Model
{
    use HasFactory;
    protected $table = "urun_kategorileri";
    public function urunleri()
    {
        return $this->hasMany(Urunler::class, 'urunler_kategori_id', 'id');
    }
}
