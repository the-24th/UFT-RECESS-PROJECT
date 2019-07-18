<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentheadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentheads', function (Blueprint $table) {
            $table->increments('agentid');
            $table->string('fname');
            $table->string('lname');
            $table->string('number');
            $table->string('district');
            $table->string('date');
            $table->string('sex');
            $table->string('signature');
            $table->string('district_assigned');
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
        Schema::dropIfExists('agentheads');
    }
}
