<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table){
            $table->string('id', 16)->unique();
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('customer');
            $table->date('date_order');
            $table->float('total');
            $table->string('payment');
            $table->string('deliveryType');
            $table->integer('status')->default(0);
            $table->text('note');
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
        Schema::dropIfExists('bills');
    }
}
