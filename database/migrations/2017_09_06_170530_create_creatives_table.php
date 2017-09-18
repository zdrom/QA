<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatives', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('campaign_id');
            $table->string('associated_line_items')->nullable();
            $table->string('creative_name')->nullable();
            $table->string('ad_format')->nullable();
            $table->string('dimensions')->nullable();
            $table->mediumText('click_through_url')->nullable();
            $table->mediumText('landing_page_url')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('markup_source')->nullable();
            $table->longText('html_js_ad_tag')->nullable();
            $table->integer('3p_ad_id')->nullable();
            $table->string('preview_url')->nullable();
            $table->string('creative_template')->nullable();
            $table->string('unique_creative_id')->nullable();
            $table->integer('barometric_placement_id')->nullable();
            $table->longText('tracking_tag')->nullable();

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
        Schema::dropIfExists('creatives');
    }
}
