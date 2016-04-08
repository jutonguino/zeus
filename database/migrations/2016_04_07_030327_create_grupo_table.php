<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            //identificador del grupo
            $table->increments('id');
            //nombre del grupo
            $table->string('nombre', 100);
            //estado del grupo activo si es true, de lo contrario false
            $table->boolean('estado')->default(true);
            //la ciudad de origen del grupo
            $table->string('ciudad_origen', 100)->nullable();
            //la fecha_llegada y tiempo y descripcion_transporte_llegada
            $table->dateTime('fecha_llegada')->nullable();
            $table->text('descripcion_transporte_llegada')->nullable();
            //la fecha_salida y tiempo y descripcion_transporte_salida
            $table->dateTime('fecha_salida')->nullable();
            $table->text('descripcion_transporte_salida')->nullable();
            //los costos contables del grupo
            $table->decimal('costo_total_recorrido', 11, 2)->nullable();
            $table->decimal('costo_total_gastado', 11, 2)->nullable();

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
        Schema::drop('grupo');
    }
}
