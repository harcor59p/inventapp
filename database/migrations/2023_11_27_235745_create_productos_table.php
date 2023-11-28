<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            $table->string('descripcion',100);
            $table->string('codigo_barras',13);
            $table->string('referencia',20);
            $table->string('grupo',3);
            $table->bigInteger('vr_ult_costo');
            $table->bigInteger('vr_precio');
            $table->date('ult_compra');
            $table->date('ult_venta');
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
        Schema::dropIfExists('productos');
    }
}
