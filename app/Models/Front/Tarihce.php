<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarihce extends Model
{
    use HasFactory;
    protected $table = 'tarihce';
    protected $fillable = [
        'id',
        'yil',
        'baslik',
        'aciklama',
        'images',
    ];
}
