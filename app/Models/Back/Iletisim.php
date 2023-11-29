<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iletisim extends Model
{
    use HasFactory;
    protected $table = 'iletisim';

    protected $fillable = [
        'id',
        'ad_soyad',
        'e_mail',
        'mesaj',
    ];
}
