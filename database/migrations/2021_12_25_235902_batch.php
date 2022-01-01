<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Batch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_batch', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('centre_id');
            $table->string('centre_name');
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
        //
    }
}
