<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrategiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategies', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('line_item_id')->nullable();
            $table->string('line_item_name')->nullable();
            $table->string('name')->nullable();
            $table->longText('geography_zip')->nullable();
            $table->longText('geography_mosaics')->nullable();
            $table->longText('geography_coordinate')->nullable();
            $table->longText('geography_dma')->nullable();
            $table->longText('geography_state')->nullable();
            $table->longText('geography_city')->nullable();
            $table->longText('geography_proximity')->nullable();
            $table->string('device_Type')->nullable();
            $table->string('content_appsite_type')->nullable();
            $table->longText('creatives')->nullable();

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
        Schema::dropIfExists('strategies');
    }
}
