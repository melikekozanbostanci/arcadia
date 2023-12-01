<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basindan extends Model
{
    use HasFactory;
    protected $table = 'basindan';
    protected $fillable = [
        'id',
        'baslik',
        "alt_baslik",
        "aciklama",
        "fotograf_ana",
        "fotograf1",
        "fotograf2",
        "fotograf3",
        "fotograf4",
    ];
}
