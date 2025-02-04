<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('lecturer_id');
            $table->string('jumlah');
            $table->string('angkatan');
            $table->string('lulusan');
            $table->timestamps();
            
        });

        
        Schema::table('students', function (Blueprint $table) {
             
        $table->foreign('lecturer_id')->references('id')->on('lecturers');
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
};
