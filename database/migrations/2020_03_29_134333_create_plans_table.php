<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->integer('validity');
            //$table->boolean('sms')->default(0);
            //$table->boolean('data')->default(0);
            //$table->boolean('call')->default(0);
            $table->string('type');
            //$table->double('data_used',3,2)->nullable();
            $table->double('data_limit',3,2)->nullable();
            $table->integer('pricing');
            $table->string('operator');
            $table->string('bandwith');
            $table->string('status');
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
        Schema::dropIfExists('plans');
    }
}
