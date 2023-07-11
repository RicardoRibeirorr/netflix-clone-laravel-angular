<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_id');

            $table->string('title');
            $table->string('description');
            $table->integer('views')->nullable()->default();
            $table->string('image_url');
            $table->string('trailer_url');
            $table->enum('type', ['MOVIE', 'SERIE']);
            $table->integer('seasons_count')->nullable()->default(0);
            $table->integer('episodes_count')->nullable()->default(0);

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
        Schema::dropIfExists('media');
    }
}
