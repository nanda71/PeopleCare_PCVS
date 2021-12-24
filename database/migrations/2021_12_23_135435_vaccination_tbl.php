<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VaccinationTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccination', function (Blueprint $table) {
            $table->bigIncrements('vaccination_id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('batch_id')->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');
            $table->foreign('batch_id')
            ->references('batch_id')
            ->on('vaccine_batch');
            
            $table->datetime('appointment_date');
            $table->string('status');
            $table->string('remarks');
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
        Schema::dropIfExists('vaccination');
    }
}
