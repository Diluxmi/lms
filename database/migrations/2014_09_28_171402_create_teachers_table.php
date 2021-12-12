<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('teachers', function (Blueprint $table) {
                $table->id();
                $table->enum('title',['Mr','Mrs','Miss']);
                $table->string('firstname');
                $table->string('lastname');
                $table->string('phonenumber');
                $table->string('address');
                $table->string('qualification');
                $table->string('experience');
                $table->string('appointmentyear');
               $table->string('grade');
               $table->enum('section',['A','B','C','D','E']);
                
                
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
        Schema::dropIfExists('teachers');
    }
}
