<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArcadiaFauna extends Model
{
    use HasFactory;
    protected $table = 'arcadia_fauna';
    protected $fillable = [
        'id',
        'aciklama',
        'images',
        'images_alt_aciklama',
    ];
}
