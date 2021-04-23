<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeStudentsTable extends Migration
{
    /** NOTE: Pivot Table
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_students', function (Blueprint $table) {
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('course_class_id');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->ondelete('cascade');

            $table->foreign('course_class_id')
                ->references('id')
                ->on('course_classes')
                ->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_students');
    }
}
