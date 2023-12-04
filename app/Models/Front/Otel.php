<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otel extends Model
{
    use HasFactory;
    protected $table = 'otel';
    protected $fillable = [
        'id',
        'fotograf_ana',
        'baslik',
        'aciklama',
        'fotograf_1',

    ];
}
