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
        Schema::dropIfExists('tbl_mobil');
        Schema::create('tbl_mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori');
            $table->string('transmisi');
            $table->string('jenis');
            $table->string('picture');
            $table->float('harga');
            $table->timestamp('created_at')->nullable();
            $table->string('autometic');
            $table->string('picture_harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_mobil');
    }
};
