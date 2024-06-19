<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primaryKey = 'cart_id';
    protected $fillable = [
        'user_id',
        'product_id',
        'size',
        'quantity',
        // 'added_at',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
