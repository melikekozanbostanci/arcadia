<?php

namespace App\Models\Back\Urun;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunler extends Model
{
    use HasFactory;
    protected $table = "urunler";

    protected $fillable = [
        'urun_adi',
        'fotograf1',
        'fotograf2',
        'fotograf3',
        'fotograf4',
        'baslik',
        'aciklama',
        'urunler_kategori_id',
    ];
    public function kategorisi()
    {
        return $this->belongsTo(UrunKategorileri::class, 'urunler_kategori_id', 'id');
    }
}
