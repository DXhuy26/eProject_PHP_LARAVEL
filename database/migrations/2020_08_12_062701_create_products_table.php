<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->unsignedInteger('id_type');
            $table->string('thuonghieu', 50);
            $table->string('new', 50);
            $table->string('images', 128);
            $table->integer('giagoc');
            $table->integer('giagiam');
            $table->text('uudiem')->nullable();
            $table->text('mota')->nullable();
            $table->foreign('id_type')->references('id')->on('type_products');
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
        Schema::dropIfExists('products');
    }
}
