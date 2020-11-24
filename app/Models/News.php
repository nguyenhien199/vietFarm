<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;
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
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

}
