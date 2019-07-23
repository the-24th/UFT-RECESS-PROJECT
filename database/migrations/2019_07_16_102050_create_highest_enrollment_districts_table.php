<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighestEnrollmentDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highest_enrollment_districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('districtname');
            $table->integer('Agenthead_pay');
            $table->integer('Agents_pay');
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
        Schema::dropIfExists('highest_enrollment_districts');
    }
}
