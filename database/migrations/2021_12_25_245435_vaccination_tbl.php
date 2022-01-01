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
        Schema::create('t_vaccination_appointment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('centre_id');
            $table->string('patient_name');
            $table->Integer('ic_passport');
            $table->string('vaccine_name');
            $table->Integer('centre_name');
            $table->Integer('centre_address');
            $table->datetime('appointment_date');
            $table->string('status');
            $table->string('remarks');
            $table->foreign('batch_id')->references('id')->on('t_batch');
            $table->foreign('patient_id')->references('id')->on('t_patients');
            $table->foreign('centre_id')->references('id')->on('t_centre');
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
