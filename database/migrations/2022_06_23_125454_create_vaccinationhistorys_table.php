<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationhistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinationhistorys', function (Blueprint $table) {
            $table->id();
            $table->string('passport');
            $table->string('user_id');
            $table->date('date');
            $table->string('vac_product');
            $table->string('batch_number');
            $table->string('vac_status');
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
        Schema::dropIfExists('vaccinationhistorys');
    }
}
