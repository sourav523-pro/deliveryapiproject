<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopifyChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopify_channels', function (Blueprint $table) {
            $table->id();
            $table->string('channel_name');
            $table->string('api_access_token');
            $table->string('api_key');
            $table->string('api_secret_key');
            $table->string('store_url');
            $table->string('fullfill_orders')->default(1);
            $table->string('cancel_orders')->default(1);
            $table->string('mark_as_paid_orders')->default(1);

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
        Schema::dropIfExists('shopify_channels');
    }
}
