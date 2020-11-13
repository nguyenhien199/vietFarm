<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'category_id',
        'image',
        'description',
        'content',
        'status',
        'created_by',
        'updated_by'
    ];
}
