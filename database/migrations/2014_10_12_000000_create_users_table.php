<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('moh_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('moh');
            $table->enum('genter',['male','female']);
            $table->string('mobile',10);
            $table->string('address');
            $table->string('district');
            $table->date('DOB');
            $table->string('user_name');
            $table->string('nic');
            $table->enum('role',['admin','moh','people']);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
