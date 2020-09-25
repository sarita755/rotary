<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Work');
            $table->string('Degination');
            $table->string('Blood_group');
            $table->string('Mobile');
            $table->string('Spouse');
            $table->string('Ri_id');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('image1');
            $table->string('image');


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
        Schema::dropIfExists('members');
    }
}
