<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certifications extends Model
{
    const ACTIVE = 1;
    const NOTACTIVE = 0;

    protected $fillable = [
        'name',
        'url',
        'image',
        'description',
        'content',
        'status',
        'created_by',
        'updated_by'
    ];

}
