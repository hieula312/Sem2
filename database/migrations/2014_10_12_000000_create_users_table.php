<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('active')->default(1);
            $table->integer('level')->default(1);
            $table->string('phoneNumber', 10)->unique();
            $table->char('sex');
            $table->date('birthday');
            $table->string('customerCity')->default('Ha Noi');
            $table->string('customerDistrict')->default('Long Bien');
            $table->string('customerSubdistrict')->default('Sai Dong');
            $table->string('address')->default('No 33, Lane 416, Nguyen Van Linh Road');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
