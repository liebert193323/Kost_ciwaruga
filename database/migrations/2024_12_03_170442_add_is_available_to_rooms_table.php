<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsAvailableToRoomsTable extends Migration
{
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->boolean('is_available')->default(true);  // Menambahkan kolom 'is_available' dengan nilai default true
        });
    }

    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('is_available');  // Menghapus kolom 'is_available' jika migrasi dibatalkan
        });
    }
}
