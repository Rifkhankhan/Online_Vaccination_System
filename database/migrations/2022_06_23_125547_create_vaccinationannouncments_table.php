<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationannouncmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinationannouncments', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('vaccine');
            $table->string('age');
            $table->string('venue');
            $table->string('dosage');
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
        Schema::dropIfExists('vaccinationannouncments');
    }
}
