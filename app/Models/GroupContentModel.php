<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupContentModel extends Model
{
    protected $table = 'group_content';

    protected $fillable = [
        'name',
        'description',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    public $timestamps = false;

    protected $dates = ['deleted_at'];
}
