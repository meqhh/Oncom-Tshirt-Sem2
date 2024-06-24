<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_time_id';

    // Definisikan fillable jika diperlukan
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'size',
        'total_price',
        // tambahkan kolom lain yang diperlukan
    ];

    // Relasi ke model Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi ke model Product jika diperlukan
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}