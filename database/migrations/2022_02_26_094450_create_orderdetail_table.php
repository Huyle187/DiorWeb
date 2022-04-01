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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->integer('sohoadon')->primary()->unsigned();
            $table->foreign('sohoadon')->references('sohoadon')->on('orders');
            $table->integer('masanpham')->unsigned();
            $table->foreign('masanpham')->references('masanpham')->on('products');
            $table->float('dongia')->nullable();
            $table->integer('soluongmua')->nullable();
            $table->float('mucgiamgia')->nullable();
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
        Schema::dropIfExists('orderdetails');
    }
};
