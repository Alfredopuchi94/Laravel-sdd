<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscipuladoNc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipuladonc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Cedula');
            $table->enum('genero', ['masculino','femenino']);
            $table->date('fechaIni');
            $table->date('fechaFin');
            $table->enum('clase1', ['si','no']);
            $table->enum('clase2', ['si','no']);
            $table->enum('clase3', ['si','no']);
            $table->enum('clase4', ['si','no']);
            $table->enum('clase5', ['si','no']);
            $table->enum('clase6', ['si','no']);
            $table->enum('clase7', ['si','no']);
            $table->enum('clase8', ['si','no']);
            $table->integer('total');
            $table->string('dicipulador');
            $table->integer('id_creyente')->unsigned();

            $table->foreign('id_creyente')->references('id')->on('nuevos_creyentes')->onDelete('no action');
            
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
        Schema::dropIfExists('discipuladonc');
    }
}
