<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_speakers', function (Blueprint $table) {
            $table->id();
            $table->integer('speaker_id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('church_name');
            $table->string('pastor_name');
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('speaking_date');
            $table->text('speaking_event');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('request_speakers');
    }
}
