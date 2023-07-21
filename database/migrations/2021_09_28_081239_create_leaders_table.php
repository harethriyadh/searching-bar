<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('theDate');
            $table->integer('radiOne');
            $table->integer('radioTwo');    
            $table->integer('radioThree');
            $table->integer('radioFour');
            $table->integer('radioFive');
            $table->integer('radioSix');
            $table->integer('radioseven');
            $table->integer('radioIeght');
            $table->integer('radioNine');
            $table->integer('radioTen');
            $table->string('theSection');
            $table->integer('TheSummation');
            $table->string('theSupervisor');
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
        Schema::dropIfExists('leaders');
    }
}
