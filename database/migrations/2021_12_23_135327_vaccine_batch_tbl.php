<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VaccineBatchTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_batch', function (Blueprint $table) {
            $table->bigIncrements('batch_id');
            
            $table->unsignedBigInteger('vaccine_id');
            $table->unsignedBigInteger('healthcareCentre_id')->nullable();
            $table->foreign('vaccine_id')
            ->references('vaccine_id')
            ->on('vaccines');
            $table->foreign('healthcareCentre_id')
            ->references('healthcareCentre_id')
            ->on('healthcare_centre');
            
            $table->datetime('expiry_date');
            $table->Integer('qty_available');
            $table->Integer('qty_administered');
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
