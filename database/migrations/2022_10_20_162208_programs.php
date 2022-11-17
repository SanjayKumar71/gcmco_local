<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Programs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('third_sub_title')->nullable();
            $table->foreignId('category_id')->default(0);
            $table->float('price')->default(0);
            $table->string('off_in_percent')->nullable();
            $table->foreignId('program_type')->default(0);
            $table->text('description')->nullable();
            $table->longText('about_traning')->nullable();
            $table->string('schedule_heading')->nullable();
            $table->text('schedule_note')->nullable();
            $table->longText('learning_objective')->nullable();
            $table->longText('course_features')->nullable();
            $table->longText('student_material_classroom')->nullable();
            $table->longText('student_material_online')->nullable();
            $table->longText('about_heartsaver')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
