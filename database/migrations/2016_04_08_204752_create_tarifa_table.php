<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('concepto',100);
            $table->decimal('valor',11,2);

            $table->integer('restaurante_id')->unsigned()->nullable();
            $table->foreign('restaurante_id')->references('id')->on('restaurante')->onDelete('cascade');

            $table->integer('hotel_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('id')->on('hotel')->onDelete('cascade');

            $table->integer('proveedor_id')->unsigned()->nullable();
            $table->foreign('proveedor_id')->references('id')->on('proveedor')->onDelete('cascade');

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
        Schema::drop('tarifa');
    }
}
