<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_items', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('campaign_property_id')->nullable();
            $table->integer('line_item_id')->nullable();
            $table->string('lineitemname')->nullable();
            $table->decimal('io_line_item_budget')->nullable();
            $table->integer('io_line_item_impressions')->nullable();
            $table->integer('io_line_item_clicks')->nullable();
            $table->integer('io_line_item_completes')->nullable();
            $table->string('startdate')->nullable();
            $table->string('enddate')->nullable();
            $table->integer('barometric_id')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('line_items');
    }
}
