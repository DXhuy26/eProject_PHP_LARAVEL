<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->increments('id');
            $table->unsignedInteger('customerID');
            $table->string("name", 30)->nullable();
            $table->string("address", 40);
            $table->string("phone", 30);
            $table->decimal("amount", 10, 2);
            $table->date("orderDate")->nullable();
            $table->string("status", 15)->default("waiting");
            $table->string("note", 150)->nullable();
            $table->timestamps();
            $table->foreign('customerID')->references('id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbOrders');
    }
}
