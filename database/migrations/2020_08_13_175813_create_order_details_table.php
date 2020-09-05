<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('orderID');
            $table->unsignedInteger("proID");
            $table->integer("quantity");
            $table->decimal("price", 15,0);
            $table->decimal("amount", 15, 0);
            $table->foreign('orderID')->references('id')->on('orders');
            $table->foreign('proID')->references('id')->on('products');
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
        Schema::dropIfExists('tbOrder_details');
    }
}
