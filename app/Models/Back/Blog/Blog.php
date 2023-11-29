<?php

namespace App\Models\Back\Blog;

use App\Models\Back\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bloglar';

    protected $fillable = [
        'uuid',
        'baslik',
        'slug',
        'icerik',
        'meta_baslik',
        'meta_aciklama',
        'meta_anahtar_kelimeler',
        'fotograf',
        'sira',
        'dil',
        'aktif',
        'admin_id',
        'deleted_by',
        'updated_by',
    ];

    public function yazar()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}
