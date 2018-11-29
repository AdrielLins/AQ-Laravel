<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->date('dataNascimento');
            $table->string('sexo',10);
            $table->string('email', 50);
            $table->string('telefoneCelular', 15);
            $table->string('telefoneResidencial', 15);
            $table->string('endereco', 50);
            $table->string('bairro', 50);
            $table->string('numero', 10);
            $table->string('complemento', 50);
            $table->string('cidade', 50);
            $table->string('estado', 2);
            $table->string('cpf', 20);
            $table->string('situacao', 10);
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
        Schema::dropIfExists('jogadors');
    }
}
