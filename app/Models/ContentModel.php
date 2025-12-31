<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari default (plurals)
    protected $table = 'content';

    // Kolom yang boleh diisi secara massal (mass assignable)
    protected $fillable = [
        'title',
        'content',
        'slug',
        'img_header',
        'group_content_id',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    // Jika kamu ingin menggunakan timestamps (walaupun sudah diatur di migrasi)
    public $timestamps = false;

    // Jika kamu ingin mengelola soft deletes (opsional)
    protected $dates = ['deleted_at'];
}
