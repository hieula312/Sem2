<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_detail', function (Blueprint $table){
            $table->string('id', 16)->unique();
            $table->string('id_bill');
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->string('id_product', 7);
            $table->foreign('id_product')->references('id')->on('products');
            $table->integer('quantity');
            $table->double('price');
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('bill_detail');
    }
}
