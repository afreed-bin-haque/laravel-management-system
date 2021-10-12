<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paroles', function (Blueprint $table) {
            $table->id();
            $table->string('prisioner_id');
            $table->string('interviewer');
            $table->string('hearing');
            $table->string('remand');
            $table->text('investigation')->nullable();
            $table->string('entrydate');
            $table->string('exitdate')->nullable();
            $table->string('lastremandvisit')->nullable();
            $table->string('b_status');
            $table->string('prison_duration')->nullable();
            $table->string('author');
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
        Schema::dropIfExists('paroles');
    }
}
