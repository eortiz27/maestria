<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('w_apellido')->nullable();
            $table->string('w_nombre')->nullable();
            $table->integer('w_edad')->nullable();
            $table->string('w_genero')->nullable();
            $table->string('w_tiposangre')->nullable();
            $table->string('w_telefono')->nullable();
            $table->string('w_correo')->nullable();
            $table->string('w_zodiaco')->nullable();
            $table->string('w_ocupacion')->nullable();
            $table->string('w_pais')->nullable();
            $table->string('w_tarjeta')->nullable();
            $table->double('w_saldo')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
