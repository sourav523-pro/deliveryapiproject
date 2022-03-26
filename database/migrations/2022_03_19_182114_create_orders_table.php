<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('channel');

            $table->string('order_id');
            $table->string('order_type');

            $table->string('ship_firstname');
            $table->string('ship_lastname');
            $table->string('ship_company_name');
            $table->string('ship_address');
            $table->string('ship_address2')->nullable();
            $table->string('ship_pincode');
            $table->string('ship_city');
            $table->string('ship_state');
            $table->string('ship_phone');

            $table->string('bill_firstname');
            $table->string('bill_lastname');
            $table->string('bill_company_name');
            $table->string('bill_address');
            $table->string('bill_address2')->nullable;
            $table->string('bill_pincode');
            $table->string('bill_city');
            $table->string('bill_state');
            $table->string('bill_phone');

            $table->string('weight');
            $table->string('cm1');
            $table->string('cm2');
            $table->string('cm3');


            $table->string('shipping_charges');
            $table->string('cod_charges');
            $table->string('tax_amt');
            $table->string('discount');
            $table->string('ivr_status')->default('0');

            $table->string('total');
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
        Schema::dropIfExists('orders');
    }
}
