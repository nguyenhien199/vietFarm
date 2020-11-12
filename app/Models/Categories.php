<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    
    const CATEGORY_SP = 'SP';
    const CATEGORY_DV = 'DV';
    const CATEGORY_CN = 'CN';
    const CATEGORY_PB = 'PB';
    const NOTACTIVE = 0;
    
    protected $fillable = [
        'name',
        'code',
        'description',
        'status',
    ];
}
