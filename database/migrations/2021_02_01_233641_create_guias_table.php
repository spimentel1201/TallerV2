<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('codigo');
            $table->string('nombresC',50);
            $table->string('apellidosC',35);
            $table->string('dni',8);
            $table->string('telefono',9);
            $table->string('direccion',255);
            $table->string('artefacto',255);
            $table->string('marca',50);
            $table->string('modelo',30);
            $table->string('serie',50);
            $table->text('accesorios');
            $table->text('descripcion');
            $table->dateTime('fecha_ing', 0);
            $table->string('estado',20);
            $table->double('monto',8,2);
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
        Schema::dropIfExists('guias');
    }
}
