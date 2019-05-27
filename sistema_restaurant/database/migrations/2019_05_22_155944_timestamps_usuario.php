<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TimestampsUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('mesas', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('comandas', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('productos', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('comandas_productos', function (Blueprint $table) {
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
        //
    }
}
