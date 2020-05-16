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
            $table->foreignId('user_id');
            $table->foreignId('categoria_id');
            $table->foreignId('cita_id')->unsigned()->nullable();
            $table->date('fecha_Orden');
            $table->date('fecha_Cita');
            $table->date('fecha_Entrega')->nullable();
            $table->string('descripcion');
            $table->string('estatus');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('cita_id')->references('id')->on('citas');
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
