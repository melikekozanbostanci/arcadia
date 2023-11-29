<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dil extends Model
{
    use SoftDeletes;

    protected $table = 'diller'; // Tablo adını belirtiyoruz

    protected $fillable = [
        'dil',
        'kod',
        'yazi',
        'durum',
        'bayrak',
        'admin_id',
        'deleted_by',
        'updated_by',
    ];

}
