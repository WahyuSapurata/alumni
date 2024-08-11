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
        Schema::create('survey_penggunas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nama_pengisi');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('email');
            $table->string('jurusan');
            $table->string('tahun_lulus');
            $table->string('status_pekerjaan');
            $table->string('kepuasan_pendidikan');
            $table->string('kepuasan_fasilitas');
            $table->text('harapan');
            $table->text('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_penggunas');
    }
};
