<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('orden_id');
            $table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('categoria_id')->unsigned();
            $table->date('fecha_Pago');
            $table->double('pago');
            //$table->double('restante');
            //$table->string('estatus');
            $table->timestamps();


            $table->foreign('orden_id')->references('id')->on('ordens')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
