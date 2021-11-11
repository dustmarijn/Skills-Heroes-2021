<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('firstname');
            $table->text('lastname');

            $table->integer('yes_no_points');
            $table->text('yes_no_dropdown');

            $table->integer('subjective_points');
            $table->integer('subjective_jury_1');
            $table->integer('subjective_jury_2');

            $table->integer('nominal_points');
            $table->text('nominal_needed');
            $table->text('nominal_deviation');
            $table->text('nominal_deviation_points');
            $table->text('nominal_deviation_points_number');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}