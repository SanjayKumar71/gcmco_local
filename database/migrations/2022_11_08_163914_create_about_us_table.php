<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('about_us_image')->nullable();
            $table->longText('about_us_description')->nullable();
            $table->longText('about_us_section_two_heading')->nullable();
            $table->longText('section_two_image_one')->nullable();
            $table->longText('section_two_description_one')->nullable();
            $table->longText('section_two_image_two')->nullable();
            $table->longText('section_two_description_two')->nullable();
            $table->longText('why_choose_us')->nullable();
            $table->integer('in_house_psychiatrist')->default(0);
            $table->integer('experience')->default(0);
            $table->integer('session_per_year')->default(0);
            $table->integer('successful_therapy')->default(0);
            $table->longText('about_us_process_section_heading')->nullable();
            $table->longText('about_us_process_section_slider_image')->nullable();
            $table->longText('process_talk_to_me_first_description')->nullable();
            $table->longText('process_make_appointment_description')->nullable();
            $table->longText('process_came_to_visit_me_description')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
