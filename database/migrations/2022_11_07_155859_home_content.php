<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_contents', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('banner_image')->nullable();
            $table->string('banner_sub_heading')->nullable();
            $table->string('banner_heading')->nullable();

            $table->longText('section_one_image')->nullable();
            $table->string('section_one_sub_heading')->nullable();
            $table->string('section_one_heading')->nullable();
            $table->text('section_one_description')->nullable();

            $table->string('section_two_heading')->nullable();
            $table->text('section_two_description')->nullable();

            $table->string('section_three_sub_heading')->nullable();
            $table->string('section_three_heading')->nullable();

            $table->string('section_four_heading')->nullable();
            $table->text('section_four_description')->nullable();
            $table->longText('section_four_image')->nullable();
            $table->longText('section_four_option_one_image')->nullable();
            $table->string('section_four_option_one_heading')->nullable();
            $table->text('section_four_option_one_description')->nullable();
            $table->longText('section_four_option_two_image')->nullable();
            $table->string('section_four_option_two_heading')->nullable();
            $table->text('section_four_option_two_description')->nullable();
            $table->longText('section_four_option_three_image')->nullable();
            $table->string('section_four_option_three_heading')->nullable();
            $table->text('section_four_option_three_description')->nullable();

            $table->string('section_five_sub_heading')->nullable();
            $table->string('section_five_heading')->nullable();
            $table->longText('section_five_image')->nullable();
            $table->longText('section_five_note_image')->nullable();
            $table->text('section_five_note')->nullable();

            $table->string('section_six_sub_heading')->nullable();
            $table->string('section_six_heading')->nullable();

            $table->longText('section_seven_image')->nullable();
            $table->string('section_seven_heading')->nullable();

            $table->string('section_eight_sub_heading')->nullable();
            $table->string('section_eight_heading')->nullable();

            $table->string('section_nine_heading')->nullable();

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
        Schema::dropIfExists('home_contents');
    }
}
