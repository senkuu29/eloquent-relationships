<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    /**
     * Mendefinisikan relasi One to Many dengan model Comment.
     * 
     * Satu post dapat memiliki banyak komentar.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        // Membuat relasi One to Many ke model Comment
        // Artinya, satu post dapat memiliki banyak komentar
        return $this->hasMany(Comment::class);
    }
}
