<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComandasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('comandas_productos');
        Schema::create('comandas_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productoIdPlatillo')->unsigned();
            $table->integer('comandaIdComanda')->unsigned();

            $table->foreign('productoIdPlatillo')->references('id')->on('productos');
            $table->foreign('comandaIdComanda')->references('id')->on('comandas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comandas_productos');
    }
}
