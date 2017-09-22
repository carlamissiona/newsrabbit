<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTableAddField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {           
            $table->string('mobile', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */ 
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {           
           $table->dropColumn('mobile');
        });
    }
}
