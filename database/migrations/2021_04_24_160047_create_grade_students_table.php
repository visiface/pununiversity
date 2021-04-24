<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_student', function (Blueprint $table) {
            $table->unsignedInteger('grade_id');
            $table->unsignedInteger('student_id');

            $table->foreign('grade_id')
                ->references('id')
                ->on('grades')
                ->ondelete('cascade');

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
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
