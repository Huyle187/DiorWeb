<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('sohoadon');
            $table->string('diachi', 200)->nullable();
            $table->string('ghichu', 300)->nullable();
            $table->dateTime('ngaydathang')->nullable();
            $table->dateTime('ngaygiaohang')->nullable();
            $table->smallInteger('tinhtranggiaohang')->nullable();
            $table->smallInteger('tinhtrangthanhtoan')->nullable();
            $table->integer('makhachhang')->unsigned();
            $table->foreign('makhachhang')->references('makhachhang')->on('customers');
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
        Schema::dropIfExists('orders');
    }
};
