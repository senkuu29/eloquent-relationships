<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Mendefinisikan relasi Many to Many dengan model User.
     * 
     * Setiap role dapat dimiliki oleh banyak user, dan hubungan ini
     * dikelola melalui tabel pivot 'user_role'.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        // Mendefinisikan relasi Many to Many dengan model User
        // Menggunakan tabel pivot 'user_role' sebagai penghubung antara Role dan User
        return $this->belongsToMany(User::class, 'user_role');
    }
}
