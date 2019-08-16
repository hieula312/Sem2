<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 7)->unique();
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('type_products');
            $table->string('name');
            $table->text('description');
            $table->float('unit_price');
            $table->float('promotion_price');
            $table->string('image');
            $table->integer('unit');
            $table->integer('new')->default(0);
            $table->integer('active')->default(1);
            $table->timestamps();
            $table->integer('feature')->default(1);
            $table->integer('sellIndex')->default(0);
            $table->integer('id_whole');
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
