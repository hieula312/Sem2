<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubdistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdistrict', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_district')->unsigned();
            $table->foreign('id_district')->references('id')->on('district');
            $table->string('name');
            $table->float('shippingfee');
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
        Schema::dropIfExists('subdistrict');
    }
}
