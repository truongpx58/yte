<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBacsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bacSi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoTen');
            $table->string('ngheNghiep');
            $table->string('chuyenNganh');
            $table->integer('cmnd');
            $table->integer('sdt');
            $table->integer('roleId')->default(3);
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
        Schema::dropIfExists('bacSi');
    }
}
