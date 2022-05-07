<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('full_name'); 
            $table->string('church_name'); 
            $table->string('specialization'); 
            $table->string('education'); 
            $table->enum('gender', ['male', 'female']);
            $table->enum('marital_status', ['single', 'married']);
            $table->integer('age');
            $table->date('graduation_year');
            $table->date('birth_date');
            $table->bigInteger('mobile_number');
            $table->string('address'); 
            $table->string('area'); 
            $table->bigInteger('national_id')->unique();
            $table->bigInteger('passport_number')->unique();
            $table->string('notes'); 
            $table->string('certificates');
            //  $table->integer('idcourse');
               //  $table->integer('idexperience');
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
        Schema::dropIfExists('employees');
    }
}
