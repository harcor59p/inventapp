<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaldosperiodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldosperiodos', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('mes');
            $table->string('bodega',3);
            $table->string('producto',10);
            $table->integer('cantidad');
            $table->bigInteger('costo_total');
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
        Schema::dropIfExists('saldosperiodos');
    }
}
