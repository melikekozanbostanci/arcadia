<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Felsefemiz extends Model
{
    use HasFactory;
    protected $table = 'felsefemiz';
    protected $fillable =[
        'id',
        'fotograf_ana',
        'baslik_surdurebilirlik',
        'alt_baslik_surdurebilirlik',
        'aciklama_surdurebilirlik_alan1',
        'fotograf_surdurebilirlik_1',
        'baslik_surdurebilirlik_2',
        'aciklama_surdurebilirlik_alan2',
        'fotograf_surdurebilirlik_2',
        'fotograf_surdurebilirlik_3',
        'fotograf_surdurebilirlik_4',
        'fotograf_surdurebilirlik_5',
        'baslik_surdurebilirlik_3',
        'aciklama_surdurebilirlik_alan3',
        'baslik_surdurebilirlik_4',
        'aciklama_surdurebilirlik_alan4',
        'baslik_surdurebilirlik_5',
        'aciklama_surdurebilirlik_alan5',
        'fotograf_surdurebilirlik_6',
        'baslik_fauna',
        'alt_baslik_fauna',
    ];
}
