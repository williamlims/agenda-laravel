<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userId');
            $table->string('name', 50);
            $table->string('middleName', 50);
            $table->string('lastName', 50);
            $table->string('webPage', 100);
            $table->string('jobTitle', 50);
            $table->string('gender', 20);
            $table->string('birthday', 15);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->string('postalCode', 20);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->string('street', 50);
            $table->string('streetNumber', 10);
            $table->timestamps('timecreated'); 
        });

        Schema::table('contacts', function($table) {
            $table->foreign('userId')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
