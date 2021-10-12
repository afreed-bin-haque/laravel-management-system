<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrimeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crime_records', function (Blueprint $table) {
            $table->id();
            $table->string('prisioner_id');
            $table->string('case_id');
            $table->string('crime_code');
            $table->string('author');
            $table->string('case_type');
            $table->text('description');
            $table->string('laywer_name');
            $table->string('judge_name');
            $table->string('email');
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
        Schema::dropIfExists('crime_records');
    }
}
