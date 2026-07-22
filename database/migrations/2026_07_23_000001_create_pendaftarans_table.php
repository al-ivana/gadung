<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->string('matematika')->nullable();
            $table->string('inggris')->nullable();
            $table->string('indonesia')->nullable();
            $table->string('pilihan1')->nullable();
            $table->string('pilihan2')->nullable();
            $table->text('alasan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
