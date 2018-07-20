<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRankAndOrdersToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function($table) {
            $table->enum('rank', ['legend', 'pro', 'amature'])->nullable();
            $table->enum('orders', ['～5', '6～10', '11～20', '21～30', '30～'])->nullable();
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
         Schema::table('users', function($table) {
            $table->dropColumn('rank');
            $table->dropColumn('orders');
    });
    }
}
