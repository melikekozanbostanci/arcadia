<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teruar extends Model
{
    use HasFactory;
    protected $table = 'teruar';
    protected $fillable = [
        'id',
        'baslik',
        'alt_baslik',
        'fotograf_ana',
        'fotograf_1',
        'fotograf_2',
        'fotograf_3',
        'fotograf_4',
        'aciklama',
    ];
}
