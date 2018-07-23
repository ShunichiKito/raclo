<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSMycoordinates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_mycoordinates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('file_path');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            
            // 外部キー設定
            $table->foreign('user_name')->references('name')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('s_mycoordinates');
    }
}
