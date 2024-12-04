<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaTable extends Migration
{
    public function up()
    {
        Schema::create('penyewa', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('nama'); // Kolom nama penyewa
            $table->string('email')->unique(); // Kolom email yang unik
            $table->string('alamat')->nullable(); // Kolom alamat, nullable jika tidak ada
            $table->string('nomor_telepon')->nullable(); // Kolom nomor telepon, nullable
            $table->date('tanggal_lahir'); // Kolom tanggal lahir penyewa
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif'); // Kolom status dengan enum
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyewa'); // Menghapus tabel penyewa jika migrasi dibatalkan
    }
}
