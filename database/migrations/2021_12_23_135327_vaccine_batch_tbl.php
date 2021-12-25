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
            $table->string('vaccine_name');
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
        Schema::dropIfExists('vaccine_batch');
    }
}
