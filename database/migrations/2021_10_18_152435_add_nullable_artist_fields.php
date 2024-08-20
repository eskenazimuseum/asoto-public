<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableArtistFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('alternate_names')->nullable()->change();
            $table->string('media_used')->nullable()->change();
            $table->text('biography')->nullable()->change();
            $table->text('bibliography')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('alternate_names')->nullable(false)->change();
            $table->string('media_used')->nullable(false)->change();
            $table->text('biography')->nullable(false)->change();
            $table->text('bibliography')->nullable(false)->change();
        });
    }
}
