<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',40);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->smallInteger('departure_time')->unsigned();
            $table->smallInteger('arrival_time')->unsigned();
            $table->string('train_serial_number', 10);
            $table->smallInteger('number_of_carriage')->unsigned();
            $table->boolean('is_in_time')->default(true);
            $table->boolean('is_out_of_time')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
