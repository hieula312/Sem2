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
            $table->increments('id');
            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->float('total');
            $table->string('payment');
            $table->string('deliveryType');
            $table->integer('status')->default(1);
            $table->integer('active')->default(1);
            $table->timestamps();
            $table->string('customerName');
            $table->string('customerAddress');
            $table->string('customerPhoneNumber');
            $table->text('note')->nullable();
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
