<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->id('stock_id');
            $table->string('stock_name');
            $table->integer('stock_amount');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};