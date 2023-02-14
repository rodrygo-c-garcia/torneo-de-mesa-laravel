<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('descripcion')->nullable();
            $table->string('sede')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_final');

            // llave foranea, realacion de 1:N
            $table->bigInteger('modalidad_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->foreign('modalida_id')->references('id')->on('modalidads');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('torneos');
    }
};
