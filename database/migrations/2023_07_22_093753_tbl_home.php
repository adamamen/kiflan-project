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
        Schema::dropIfExists('tbl_home');
        Schema::create('tbl_home', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori');
            $table->timestamp('created_at')->nullable();
            $table->string('nama_mobil');
            $table->string('picture');
            $table->string('tahun_mobil');
            $table->string('url');
            $table->float('harga');
            $table->string('transmisi');
            $table->string('autometic');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_home');
    }
};
