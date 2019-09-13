<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('contId');
            $table->string('postalCode', 20);
            $table->string('city', 50);
            $table->string('street', 50);
            $table->string('streetNumber', 10);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->timestamps('timecreated');
        });

        Schema::table('address', function($table) {
            $table->foreign('contId')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
