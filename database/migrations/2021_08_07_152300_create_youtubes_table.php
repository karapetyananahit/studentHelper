<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtubes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("position");
            $table->string("url");
            $table->string("languages");
            $table->string("date");
            $table->text("types");
            $table->integer("playlists");
            $table->string("img");
            $table->integer("followers");
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
        Schema::dropIfExists('youtubes');
    }
}
