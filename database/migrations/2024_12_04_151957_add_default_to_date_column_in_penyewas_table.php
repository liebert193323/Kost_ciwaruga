<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultToDateColumnInPenyewasTable extends Migration
{
    public function up()
    {
        Schema::table('penyewas', function (Blueprint $table) {
            // Menambahkan nilai default CURRENT_TIMESTAMP pada kolom 'date'
            $table->date('date')->default(now())->change();
        });
    }

    public function down()
    {
        Schema::table('penyewas', function (Blueprint $table) {
            $table->date('date')->nullable()->change();
        });
    }
}
