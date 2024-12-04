<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceToRoomsTable extends Migration
{
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->integer('price');  // Menambahkan kolom 'price'
        });
    }

    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('price');  // Menghapus kolom 'price' jika migrasi dibatalkan
        });
    }
}
