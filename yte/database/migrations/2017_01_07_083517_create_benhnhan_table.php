<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenhnhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benhNhan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoTen');
            $table->integer('cmnd');
            $table->integer('MBS');
            $table->integer('roleId')->default(2);
            //$table->primary(['roleId']);
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
        Schema::dropIfExists('benhNhan');
    }
}
