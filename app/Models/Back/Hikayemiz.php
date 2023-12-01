<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hikayemiz extends Model
{
    use HasFactory;
    protected $table = 'hikayemiz';
    protected $fillable = [
        'id',
        'fotograf_ana',
        'baslik_teruar',
        'alt_baslik_teruar',
        'aciklama_teruar_alan1',
        'fotograf_teruar_1',
        'baslik_teruar_alan2',
        'aciklama_teruar_alan2_1',
        'aciklama_teruar_alan2_2',
        'fotograf_teruar_2',
        'baslik_kurucu',
        'alt_baslik_kurucu',
        'aciklama_kurucu_alan1',
        'fotograf_kurucu_1',
        'fotograf_kurucu_text_1',
        'fotograf_kurucu_2',
        'fotograf_kurucu_text_2',
        'fotograf_kurucu_3',
        'fotograf_kurucu_text_3',
        'baslik_bag',
        'alt_baslik_bag',
        'aciklama_bag_alan1',
        'fotograf_bag_1',
        'baslik_bag_alan2_1',
        'baslik_bag_alan2_2',
        'aciklama_bag_alan2_1',
        'aciklama_bag_alan2_2',
        'fotograf_bag_2',
        'fotograf_bag_3',
        'fotograf_bag_4',
        'fotograf_bag_4_aciklama',
        'aciklama_bag_alan3_1',
        'aciklama_bag_alan3_2',
        'aciklama_bag_alan3_3',
        'baslik_bag_alan3_1',
        'baslik_bag_alan3_2',
        'baslik_arcadia',
        'alt_baslik_arcadia',
        'aciklama_arcadia_alan1',
        'fotograf_arcadia_1',
        'baslik_arcadia_alan2_1',
        'aciklama_arcadia_alan2_1',
        'fotograf_arcadia_2',
        'fotograf_arcadia_3',
        'baslik_arcadia_alan3_1',
        'aciklama_arcadia_alan3_1',
        'baslik_arcadia_alan4_1',
        'aciklama_arcadia_alan4_1',
        'fotograf_arcadia_4',
    ];
}
