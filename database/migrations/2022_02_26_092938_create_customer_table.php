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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('makhachhang');
            $table->string('tenkhachhang', 50);
            $table->string('taikhoan', 40)->nullable();
            $table->string('matkhau', 40)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('diachi', 200)->nullable();
            $table->string('dienthoai', 15)->nullable();
            $table->tinyInteger('gioitinh');
            $table->dateTime('ngaysinh')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
