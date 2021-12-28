<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VaccinesTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('vaccine_name')->unique();
            $table->string('manufacturer');
            // $table->bigInteger('centre_id')->unsigned();
            // $table->foreign('centre_id')->references('id')->on('t_centre');
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
        Schema::dropIfExists('vaccines');
    }
}
