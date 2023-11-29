<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoGaleri extends Model
{
    use HasFactory;

    protected $table = "foto_galeri";

    protected $fillable = [
        'id',
        'baslik',
        'aciklama',
        'images',
    ];
}
