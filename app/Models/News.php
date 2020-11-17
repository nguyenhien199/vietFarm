<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    const NOTACTIVE = 0;
    
    protected $table = 'news';
    protected $fillable = [
        'title',
        'url',
        'image',
        'description',
        'content',
        'status',
        'created_by',
        'updated_by'
    ];
    
}