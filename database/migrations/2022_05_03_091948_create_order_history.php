<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_history', function (Blueprint $table) {
            $table->id();
            $table->timestamp('order_date');
            $table->string('user_name');
            $table->string('phone');
            $table->string('service_type');
            $table->string('state');
            $table->string('meter_type');
            $table->string('meter_number');
            $table->double('amount');
            $table->string('email');
            $table->string('network');
            $table->string('mobile_no');
            $table->string('data_bundle');
            $table->string('phone1');
            $table->string('provider');
            $table->string('package');
            $table->string('smart_card');
            $table->string('service');
            $table->string('coin_type');
            $table->string('recieving_address');
            $table->boolean('order_result');
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
        Schema::dropIfExists('order_history');
    }
}
