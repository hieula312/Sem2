<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_whole')->unsigned();
            $table->foreign('id_whole')->references('id')->on('whole_products');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('abbreviation', 2)->unique();
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
        Schema::dropIfExists('type_products');
    }
}
