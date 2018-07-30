<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned()->index()->nullable();
            $table->integer('uitem_id')->unsigned()->index()->nullable();
            $table->enum('myitems_check', ['on', 'off'])->nullable();
            $table->enum('newitems_check', ['on', 'off'])->nullable();
            $table->timestamps();
            
            // 外部キー設定
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('uitem_id')->references('id')->on('u_items')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordered_items');
    }
}
