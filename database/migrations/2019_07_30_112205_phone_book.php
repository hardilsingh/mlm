<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PhoneBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phoneBooks', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('ph')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phoneBook', function (Blueprint $table) {
            //
        });
    }
}
