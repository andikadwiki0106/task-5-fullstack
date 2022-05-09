<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'content',
        'status',
        'image',
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
