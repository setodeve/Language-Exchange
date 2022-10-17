<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('houseUsername');
            $table->string('title');
            $table->string('meetDate');
            $table->string('location');
            $table->string('languageA');
            $table->string('languageB');
            $table->string('participants');
            $table->integer('min');
            $table->integer('max');
            $table->string('placeImage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
