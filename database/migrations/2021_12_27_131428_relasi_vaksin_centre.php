<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiVaksinCentre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_relasiVaccineCentre', function (Blueprint $table)
        {
            $table->bigInteger('vaccine_id')->unsigned();
            $table->bigInteger('centre_id')->unsigned();
            $table->timestamps();
            $table->foreign('vaccine_id')->references('id')->on('t_vaccines');
            $table->foreign('centre_id')->references('id')->on('t_centre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
