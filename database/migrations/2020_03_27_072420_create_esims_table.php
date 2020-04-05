<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esims', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->string('msisiidn');
            $table->string('iccid1');
            $table->string('iccid2');
            $table->string('status');
            $table->integer('data_used')->default(0);
            $table->integer('sms_used')->default(0);
            $table->integer('call_used')->default(0);
            $table->integer('plan_id');
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('esims');
    }
}
