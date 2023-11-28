<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTercerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
            $table->string('num_identificacion',20);
            $table->string('tipo_identificacion',3);
            $table->string('nombre', 100);
            $table->string('direccion',100);
            $table->string('email', 50);
            $table->string('telefono', 20);
            $table->string('ciudad', 50);
            $table->string('clase', 2);
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
        Schema::dropIfExists('terceros');
    }
}
