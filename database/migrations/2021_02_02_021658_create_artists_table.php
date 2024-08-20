<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alternate_names');
            $table->string('display_dates');
            $table->string('life_dates');
            $table->string('active_locations');
            $table->string('media_used');
            $table->text('biography');
            $table->text('bibliography');
            $table->text('entry_notes')->nullable();
            $table->string('alphasort');
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
        Schema::dropIfExists('artists');
    }
}
