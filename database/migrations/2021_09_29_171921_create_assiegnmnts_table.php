<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssiegnmntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignmets', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['term1','term2','term3']);
            $table->string('schedule');
            $table->string('paper_upload');
            $table->string('answer_upload');
            $table->string('result');
            
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
        Schema::dropIfExists('assiegnmnts');
    }
}
