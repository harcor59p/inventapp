<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',5);
            $table->integer('consecutivo');
            $table->date('fecha');
            $table->integer('anio');
            $table->integer('mes');
            $table->string('producto',10);
            $table->integer('cantidad');
            $table->string('bodega',3);
            $table->bigInteger('costo');
            $table->bigInteger('precio');
            $table->string('usuario' , 10);
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
        Schema::dropIfExists('transacciones');
    }
}
