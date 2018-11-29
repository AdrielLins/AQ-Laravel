<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'jogador_id',
        'usuario_id',
        'esporte_id',
        'data',
        'horario',
        'valor',
        'status',
        'observacoes'];

    public function jogador(){
        return $this->belongsTo('App\Jogador');
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }

    public function esporte(){
        return $this->belongsTo('App\Esporte');
    }
}
