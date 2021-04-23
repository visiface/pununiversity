<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')
                ->unique();
            
            $table->unsignedInteger('course_id');
            
            $table->string('fname');
            $table->string('lname');
            
            $table->string('email')
                ->unique();
            
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
        Schema::dropIfExists('students');
    }
}
