<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['term1','term2','term3']); 
            $table->string('grade');
            $table->string('section');
            $table->foreignId('subject_id')->nullable();
            $table->foreignId('student_id')->nullable();
            
            $table->timestamps();
          
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
