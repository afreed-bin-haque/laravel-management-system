<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegPoliceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_police', function (Blueprint $table) {
            $table->id();
            $table->string('rank');
            $table->string('name');
            $table->string('email')->uniqid();
            $table->string('gender');
            $table->string('polic_station');
            $table->string('age');
            $table->string('blood_g');
            $table->string('case_id');
            $table->string('duty_t');
            $table->string('join_d');
            $table->string('position_p');
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
        Schema::dropIfExists('reg_police');
    }
}
