<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cita_id')->unsigned();
            $table->unsignedBigInteger('categoria_id')->unsigned();
            $table->unsignedBigInteger('usuario_id')->unsigned();
            $table->unsignedBigInteger('pago_id')->unsigned();
            $table->date('fecha_Orden');
            $table->date('fecha_Entrega');
            $table->string('descripcion');
            $table->string('estatus');
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
        Schema::dropIfExists('ordens');
    }
}
