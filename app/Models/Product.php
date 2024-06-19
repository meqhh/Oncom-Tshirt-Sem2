<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image_url',
    ];
    public function carts(){
        return $this->hasMany(Cart::class, 'product_id', 'product_id');
    }

    public $timestamps = false;
}
