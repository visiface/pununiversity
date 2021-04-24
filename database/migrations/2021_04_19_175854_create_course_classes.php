<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->string('name');
            $table->string('subject');
            $table->longText('description');
            
            $table->timestamp('created_at')
                ->useCurrent();
            
            $table->timestamp('updated_at')
                ->useCurrent();
            
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_classes');
    }
}
