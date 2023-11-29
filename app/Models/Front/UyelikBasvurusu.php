<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UyelikBasvurusu extends Model
{
    use HasFactory;
    protected $table = 'uyelik_basvurusu';
    protected $fillable = [
        'id',
        'faaliyet_alani',
        'ticari_unvan',
        'tapdk_belge_no',
        'ad',
        'soyad',
        'dogum_tarihi',
        'telefon',
        'eposta',
        'adres',
        'il',
        'ilce',
        'ekler',
        'sifre',
        'onay',
    ];
}
