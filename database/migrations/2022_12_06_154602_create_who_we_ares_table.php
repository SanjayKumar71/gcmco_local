<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhoWeAresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('who_we_ares', function (Blueprint $table) {
            $table->id();
            
            $table->text('banner_image');
            $table->string('banner_heading')->nullable();

            $table->string('section_one_heading');
            $table->text('section_one_description')->nullable();
            $table->text('section_one_image_one')->nullable();
            $table->text('section_one_image_two')->nullable();

            $table->string('section_two_heading');
            $table->text('section_two_description')->nullable();
            $table->text('section_two_image')->nullable();

            $table->string('section_three_heading');
            $table->text('section_three_description')->nullable();
            $table->text('section_three_image')->nullable();

            $table->string('section_four_sub_heading');
            $table->text('section_four_heading')->nullable();
            $table->text('section_four_image')->nullable();
            $table->text('section_four_options')->nullable();

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
        Schema::dropIfExists('who_we_ares');
    }
}
