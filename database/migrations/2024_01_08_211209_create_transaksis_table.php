<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('pemeliharaan_id')->nullable();
            $table->string('perawatan_id')->nullable();
            $table->string('kilometer')->nullable();
            $table->string('nama')->nullable();
            $table->string('volume')->nullable();
            $table->string('satuan')->nullable();
            $table->string('harga_satuan')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('tempat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
