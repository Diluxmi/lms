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
                $table->id();
                $table->string('name');
                $table->foreignId('grade_id');
                $table->string('email')->unique();
                $table->string('index_no')->unique();
                $table->string('password');
                
                $table->timestamps();

                $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
                
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
