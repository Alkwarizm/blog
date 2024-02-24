<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function author() 
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
