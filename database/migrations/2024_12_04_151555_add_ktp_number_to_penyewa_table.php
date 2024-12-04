<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKtpNumberToPenyewaTable extends Migration
{
    public function up()
    {
        Schema::table('penyewas', function (Blueprint $table) {
            $table->string('ktp_number', 20)->after('address');
        });
    }

    public function down()
    {
        Schema::table('penyewas', function (Blueprint $table) {
            $table->dropColumn('ktp_number');
        });
    }
}
