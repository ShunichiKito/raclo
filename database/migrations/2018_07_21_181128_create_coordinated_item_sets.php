<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinatedItemSets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinated_item_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->integer('stylist_id')->unsigned()->index()->nullable();
            $table->string('tops1')->nullable();
            $table->string('tops2')->nullable();
            $table->string('tops3')->nullable();
            $table->string('bottoms')->nullable();
            $table->string('shoes')->nullable();
            $table->string('hats')->nullable();
            $table->string('accessories1')->nullable();
            $table->string('accessories2')->nullable();
            $table->string('accessories3')->nullable();
            $table->timestamps();
            
            // 外部キー設定
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('stylist_id')->references('id')->on('users')->onDelete('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinated_item_sets');
    }
}
