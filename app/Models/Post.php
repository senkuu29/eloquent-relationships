<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    /**
     * comments
     *
     * @return void
     */
    public function comments()
    {
        // membuat relasi many ke dalam model commment atau table comment
        return $this->hasMany(Comment::class);
    }
}