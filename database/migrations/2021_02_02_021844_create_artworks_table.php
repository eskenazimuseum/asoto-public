<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->text('primary_title');
            $table->text('alternate_titles')->nullable();
            $table->string('date')->nullable();
            $table->text('credit_line')->nullable();
            $table->text('home_institution')->nullable();
            $table->text('institution_link')->nullable();
            $table->string('image_path')->nullable();
            $table->text('alt_text')->nullable();
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('artworks');
    }
}
