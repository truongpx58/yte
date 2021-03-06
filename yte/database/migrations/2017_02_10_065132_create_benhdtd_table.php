<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenhdtdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benhdtd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ngay');
            $table->string('huyetAp');
            $table->string('canNang');
            $table->string('chieuCao');
            $table->string('duongHuyet');
            $table->string('tinhTrang');
            $table->string('tl');
            $table->string('r');
            $table->string('an');
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
        Schema::dropIfExists('benhdtd');
    }
}
