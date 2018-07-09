<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropStylistPasswordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('stylist_password_resets');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('stylist_password_resets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stylist_name')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }
}
