<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id'); // 'product_id' column, primary key, auto-incrementing
            $table->string('name', 100); // 'name' column, type varchar, length 100
            $table->text('description'); // 'description' column, type text
            $table->decimal('price', 10, 2); // 'price' column, type decimal, precision 10, scale 2
            $table->integer('stock', false, true); // 'stock' column, type int, length 11
            $table->string('image_url', 255); // 'image_url' column, type varchar, length 255
            $table->timestamp('created_at')->useCurrent(); // 'created_at' column, type timestamp, default current timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
