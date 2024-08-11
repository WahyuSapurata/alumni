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
        Schema::create('data_mabas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('fakultas');
            $table->string('tahun_masuk');
            $table->string('jumlah_l');
            $table->string('jumlah_p');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_mabas');
    }
};
