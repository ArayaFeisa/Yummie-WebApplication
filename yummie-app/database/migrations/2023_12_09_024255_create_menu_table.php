<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id('menu_id');
            $table->string('nama_menu');
            $table->double('harga');
            $table->text('deskripsi');
            $table->string('gambar_url');
            $table->timestamps();
        });

        // Batasi operasi CRUD hanya pada operasi Read
        Schema::table('menu', function (Blueprint $table) {
            // Nonaktifkan pembuatan tabel
            $table->disableForeignKeyConstraints();
            $table->disableIndexCreation();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
