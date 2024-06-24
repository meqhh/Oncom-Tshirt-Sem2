<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name', 
        'address',
        'date_of_birth',
        'email', 
        'profile_photo_path',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function carts(){
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }
}
