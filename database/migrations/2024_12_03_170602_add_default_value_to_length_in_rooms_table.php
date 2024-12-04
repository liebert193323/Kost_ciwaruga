<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValueToLengthInRoomsTable extends Migration
{
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->integer('length')->default(0)->change();  // Menambahkan default value pada 'length'
            $table->integer('width')->default(0)->change();  // Menambahkan default value pada 'width'
            $table->integer('cost_per_month')->default(0)->change();  // Menambahkan default value pada 'cost_per_month'
        });
    }

    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->integer('length')->nullable()->change();  // Menghapus default value
            $table->integer('width')->nullable()->change();  // Menghapus default value
            $table->integer('cost_per_month')->nullable()->change();  // Menghapus default value
        });
    }
}
