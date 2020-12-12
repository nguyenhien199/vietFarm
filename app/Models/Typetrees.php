<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Typetrees extends Model
{
    use SoftDeletes;
    const ACTIVE = 1;
    const NOTACTIVE = 0;
    protected $table = 'type_trees';

    protected $fillable = [
        'name',
        'category_id',
        'url',
        'image',
        'description',
        'content',
        'status',
        'created_by',
        'updated_by'
    ];
    
    public function category()
    {
        return $this->BelongsTo(Categories::class);
    }
}
