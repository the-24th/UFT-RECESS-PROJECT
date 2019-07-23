<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('members_enrolled');
            $table->integer('Number_of_agents');
            $table->string('District_initials');
            $table->timestamps();
        });

        DB::table('districts')->insert([ ['name' => 'Kampala', 'members_enrolled' => 0,'Number_of_agents' =>0,'District_initials'=>'KLA'], ['name' => 'Kasese', 'members_enrolled' => 0,'Number_of_agents' =>0,'District_initials'=>'KAS'],  ['name' => 'Kitgum', 'members_enrolled' => 0,'Number_of_agents' =>0,'District_initials'=>'KIT'],  ['name' => 'Mbarara', 'members_enrolled' => 0,'Number_of_agents' =>0,'District_initials'=>'MBRA'],  ['name' => 'Gulu', 'members_enrolled' => 0,'Number_of_agents' =>0,'District_initials'=>'GUL'],  ['name' => 'Bushenyi', 'members_enrolled' => 0,'Number_of_agents' =>0,'District_initials'=>'BSH'],  ['name' => 'Koboko', 'members_enrolled' => 0,'Number_of_agents' =>0,'District_initials'=>'KOB'], ['name' => 'Mbale', 'members_enrolled' => 0,'Number_of_agents' =>0,'District_initials'=>'MBA'] ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
