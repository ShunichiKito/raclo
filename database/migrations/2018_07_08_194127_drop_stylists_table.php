<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropStylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('stylists');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::create('stylists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stylist_name');
            $table->string('age');
            $table->string('gender');
            $table->string('background');
            $table->string('style');
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
