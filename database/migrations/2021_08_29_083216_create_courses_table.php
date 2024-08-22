<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_type');
            $table->string('course_description');
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('semester_id');
            $table->unsignedInteger('session_id');
            $table->unsignedDecimal('cost');
            $table->unsignedDecimal('current_cost');
            $table->unsignedInteger('rating');
            $table->string('center_name')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('full_time_or_part_time')->nullable();
            $table->string('nvq')->nullable();
            $table->string('month')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
