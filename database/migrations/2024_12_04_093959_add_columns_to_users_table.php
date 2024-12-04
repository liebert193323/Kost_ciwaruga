<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 25)->after('id');
            $table->string('last_name', 25)->after('first_name');
            $table->boolean('owner')->default(false)->after('password');
            $table->string('photo_path', 100)->nullable()->after('owner');
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name', 'last_name', 'owner', 'photo_path');
        });
    }

    
};
