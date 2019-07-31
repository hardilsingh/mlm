<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddressBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addressBooks', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('street');
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('country_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addressBook', function (Blueprint $table) {
            //
        });
    }
}
