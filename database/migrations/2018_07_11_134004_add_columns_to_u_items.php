<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('u_items', function($table) {
            $table->string('myitems_check')->nullable();
            $table->string('newitems_check')->nullable();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     
    public function down()
    {
        //
        Schema::table('u_items', function($table) {
            $table->dropColumn('myitems_check');
            $table->dropColumn('newitems_check');
    });
}
}