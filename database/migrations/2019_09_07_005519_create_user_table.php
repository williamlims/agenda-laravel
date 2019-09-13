<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('lastName', 50);
            $table->string('postalCode', 20);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->rememberToken();
            $table->timestamps('timecreated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
