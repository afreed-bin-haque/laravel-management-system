<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrisonerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisoner_infos', function (Blueprint $table) {
            $table->id();
            $table->string('case_id');
            $table->string('name');
            $table->string('email')->uniqid();
            $table->string('relation');
            $table->string('gender');
            $table->string('age');
            $table->string('Blood_g');
            $table->string('height');
            $table->string('weight');
            $table->string('punishment');
            $table->string('address');
            $table->string('prison_cell');
            $table->string('status');
            $table->string('prisoner_image');
            $table->string('prisoner_id');
            $table->string('inserted_on');
            $table->string('inserted_by');
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
        Schema::dropIfExists('prisoner_infos');
    }
}
