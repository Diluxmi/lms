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
                $table->enum('title',['Mr','Miss']);
                $table->string('firstname');
                $table->string('lastname');
                $table->string('grade');
                $table->enum('section',['A','B','C','D','E',]);
                $table->string('address');
                $table->string('phonenumber');
                $table->string('index_no')->unique();
        
                
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
        Schema::dropIfExists('students');
    }
}
