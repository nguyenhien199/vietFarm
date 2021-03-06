<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model
{
    use SoftDeletes;
    const ACTIVE = 1;
    const NOTACTIVE = 0;

    protected $fillable = [
        'name',
        'category_id',
        'url',
        'image',
        'url_video',
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
