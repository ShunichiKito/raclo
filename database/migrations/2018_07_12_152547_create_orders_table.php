<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('stylist_id');
            $table->timestamps();
            
            // 外部キー設定
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('stylist_id')->references('id')->on('users')->onDelete('cascade');

            // user_idとfollow_idの組み合わせの重複を許さない
            $table->unique(['user_id', 'stylist_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
