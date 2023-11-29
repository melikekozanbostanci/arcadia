<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasatRaporlari extends Model
{
    use HasFactory;
    protected $table = "hasat_raporlari";

    protected $fillable = [
        'id',
        'hasat_yil',
        'hasat_raporu_pdf'
    ];
}
