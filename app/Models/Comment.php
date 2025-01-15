<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    /**
     * post
     *
     * @return void
     */
    public function post()
    {
        // model comment ini terhubung atau di mliki oleh model post
        return $this->belongsTo(Post::class);
    }
}