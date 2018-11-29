<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->integer('esporte_id')->unsigned();
            $table->foreign('esporte_id')->references('id')->on('esportes');
            $table->integer('jogador_id')->unsigned();
            $table->foreign('jogador_id')->references('id')->on('jogadors');
            $table->date('data');
            $table->time('horario');
            $table->string('status', 20);
            $table->string('observacoes', 100);
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
        Schema::dropIfExists('agendamentos');
    }
}
