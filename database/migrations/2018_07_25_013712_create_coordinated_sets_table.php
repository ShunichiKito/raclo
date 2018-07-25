<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinatedSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinated_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->integer('stylist_id')->unsigned()->index()->nullable();
            $table->integer('order_id')->unsigned()->index()->nullable();
            
            $table->string('item1')->nullable();
            $table->string('item1_path')->nullable();
            $table->string('item2')->nullable();
            $table->string('item2_path')->nullable();
            $table->string('item3')->nullable();
            $table->string('item3_path')->nullable();
            $table->string('item4')->nullable();
            $table->string('item4_path')->nullable();
            $table->string('item5')->nullable();
            $table->string('item5_path')->nullable();
            $table->string('item6')->nullable();
            $table->string('item6_path')->nullable();
            $table->string('item7')->nullable();
            $table->string('item7_path')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinated_sets');
    }
}
