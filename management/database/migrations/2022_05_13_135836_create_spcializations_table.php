<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpcializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spcializations', function (Blueprint $table) {
            $table->id();
            //codeof job
            //codeofapp
            //idservant
//$table->date('today')->default(DB::raw('CURRENT_DATE'))->useCurrent();
            //  $table->year('today')->CURRENT_DATE();
            $table->year('birthdate');
            $table->integer('age')->virtualAs('oof - birthdate')->nullable();

            $table->year('oof')->useCurrent();
            //  $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spcializations');
    }
}
