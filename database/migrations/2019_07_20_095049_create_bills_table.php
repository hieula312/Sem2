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
            $table->string('id', 8)->unique();
            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->float('total');
            $table->integer('payment');
            $table->string('deliveryType');
            $table->integer('status')->default(1);
            $table->integer('active')->default(1);
            $table->timestamps();
            $table->string('customerCity');
            $table->string('customerDistrict');
            $table->string('customerSubdistrict');
            $table->string('customerAddress');
            $table->string('customerName');
            $table->string('customerPhoneNumber');
            $table->string('customerEmail');
            $table->text('note')->nullable();
            $table->string('otp');
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
