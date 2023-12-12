<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('menu_id');
            $table->string('nama_menu');
            $table->double('harga');
            $table->text('deskripsi');
            $table->string('gambar_url');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
