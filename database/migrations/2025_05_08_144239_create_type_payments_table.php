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
<<<<<<<< HEAD:database/migrations/2025_04_29_170247_create_product_prices_table.php
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products','id');
            $table->double('box_price', 8, 2);
            $table->double('fraction_price', 8, 2)->default(0.00);;
========
        Schema::create('type_payments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->boolean('status')->default(true);
>>>>>>>> 574a6f8a218dc3f8942a64756b92ac91f043dae8:database/migrations/2025_05_08_144239_create_type_payments_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2025_04_29_170247_create_product_prices_table.php
        Schema::dropIfExists('product_prices');
========
        Schema::dropIfExists('type_payments');
>>>>>>>> 574a6f8a218dc3f8942a64756b92ac91f043dae8:database/migrations/2025_05_08_144239_create_type_payments_table.php
    }
};
