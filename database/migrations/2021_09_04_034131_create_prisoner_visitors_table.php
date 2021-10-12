<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrisonerVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisoner_visitors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->uniqid();
            $table->string('relation');
            $table->string('gender');
            $table->string('age');
            $table->string('prisoner_id');
            $table->string('no_visit');
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
        Schema::dropIfExists('prisoner_visitors');
    }
}
