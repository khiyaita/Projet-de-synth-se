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
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->decimal('price', 8, 2);
    $table->decimal('discountPercentage', 5, 2);
    $table->decimal('rating', 4, 2);
    $table->integer('stock');
    $table->string('brand');
    $table->string('category');
    $table->string('thumbnail');
    $table->json('images');
    $table->timestamps();
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
