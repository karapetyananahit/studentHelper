<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddField17062021UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('medal_percent')->default(0)->after("remember_token");
            $table->integer('medal_count')->default(0)->after("remember_token");
            $table->integer('medal_task')->default(0)->after("remember_token");
            $table->integer('medal_top_10')->default(0)->after("remember_token");
            $table->integer('medal_bronze')->default(0)->after("remember_token");
            $table->integer('medal_silver')->default(0)->after("remember_token");
            $table->integer('medal_gold')->default(0)->after("remember_token");
            $table->integer('spend_points')->default(0)->after("remember_token");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['medal_gold', 'medal_silver', 'medal_bronze', 'medal_top_10', 'medal_percent', 'medal_count', 'spend_points']);
        });
    }
}
