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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('masanpham');
            $table->string('tensanpham')->nullable();
            $table->bigInteger('giaban')->nullable();
            $table->bigInteger('giagiam')->nullable();
            $table->longText('mota')->nullable();
            $table->string('subtittle', 200)->nullable();
            $table->string('hinhanh', 200)->nullable();
            $table->integer('soluongton')->nullable();
            $table->tinyInteger('trangthai')->nullable();
            $table->foreignID('maloaihang')->references('id')->on('typeproducts');
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
        Schema::dropIfExists('products');
    }
};
