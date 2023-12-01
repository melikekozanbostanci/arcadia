<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArcadiaBaglari extends Model
{
    use HasFactory;
    protected $table = 'arcadia_baglari';
    protected $fillable =[
        'id',
        'fotograf_ana',
        'baslik_arcadia',
        'alt_baslik_arcadia',
        'aciklama_arcadia_alan1',
        'fotograf_arcadia_1',
        'baslik_arcadia_alan2_1',
        'aciklama_arcadia_alan2_1',
        'aciklama_arcadia_alan2_2',
        'baslik_arcadia_alan3_1',
        'aciklama_arcadia_alan3_1',
        'fotograf_arcadia_2',
        'baslik_uzum',
        'alt_baslik_uzum',
        'aciklama_uzum_alan1',
        'fotograf_uzum_1',
        'fotograf_uzum_1_aciklama',
        'fotograf_uzum_1_aciklama2',
        'aciklama_uzum_alan2',
        'fotograf_uzum_2',
        'fotograf_uzum_3',
        'baslik_bag',
        'alt_baslik_bag',
        'fotograf_bag'
    ];
}
