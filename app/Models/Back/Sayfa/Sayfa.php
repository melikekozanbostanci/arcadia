<?php

namespace App\Models\Back\Sayfa;

use App\Models\Back\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sayfa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sayfalar';

    protected $fillable = [
        'baslik',
        'slug',
        'icerik',
        'meta_baslik',
        'meta_aciklama',
        'meta_anahtar_kelimeler',
        'fotograf',
        'sira',
        'aktif',
    ];

    public function kategori()
    {
        return $this->belongsTo(SayfaKategori::class, 'kategori_id', 'id');
    }

    public function yazar()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}
