<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slides extends Model
{
    const ACTIVE = 1;
    const NOTACTIVE = 0;
    
    protected $fillable = [
        'title',
        'image',
        'content',
        'author',
        'status',
        'created_by',
        'updated_by'
    ];
}
