<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasatRapor extends Model
{
    use HasFactory;

    protected $table = 'hasat_raporlari';
    protected $fillable = [
        'id',
        'hasat_yil',
        'hasat_raporu_pdf'
    ];
}
