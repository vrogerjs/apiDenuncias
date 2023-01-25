<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('anonimo');
            $table->string('tipopersona', 32)->nullable();
            $table->string('tipodocumento', 32)->nullable();
            $table->string('nrodocumento', 32)->nullable();
            $table->string('apenombres', 256)->nullable();
            $table->string('razonsocial', 256)->nullable();
            $table->string('representante', 256)->nullable();
            $table->string('domicilio', 1024)->nullable();
            $table->string('telefono', 16)->nullable();
            $table->string('email', 128)->nullable();
            $table->tinyInteger('funcionario')->nullable();
            $table->string('organo', 1024)->nullable();
            $table->string('cargo', 1024)->nullable();
            $table->text('vinculo')->nullable();
            // $table->string('apenombresdenunciado', 256)->nullable();
            // $table->string('cargodenunciado', 1024)->nullable();
            $table->text('deschechos')->nullable();
            $table->string('documentacion', 1024)->nullable();
            $table->text('respuesta')->nullable();
            $table->tinyInteger('activo')->nullable();
            $table->tinyInteger('borrado')->nullable();
            $table->unsignedBigInteger('motivo_id');
            $table->unsignedBigInteger('personal_id');

            $table->foreign('motivo_id')->references('id')->on('motivos')->onDelete('cascade');
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');


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
        Schema::dropIfExists('denuncias');
    }
}
