<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['accepted','pending'])->default('pending');
            $table->bigInteger('no_of_req_emp');
            $table->dateTime('created_at', 0);
            $table->string('notes');
            $table->bigInteger('job');
            $table->string('requirements');
            $table->float('salary', 8, 2);
            $table->enum('insurance', ['yes','no'])->default('no');
            $table->enum('transportation', ['yes','no'])->default('no');
            $table->unsignedBigInteger('servant_id');
        $table->foreign('servant_id')->references('id')->on('servants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
