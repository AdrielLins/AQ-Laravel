<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $fillable = [
        'nome',
        'dataNascimento',
        'sexo',
        'email',
        'telefoneCelular',
        'telefoneResidencial',
        'endereco',
        'bairro',
        'numero',
        'complemento',
        'cidade',
        'estado',
        'cpf',
        'rg',
        'estadoCivil',
        'situacao'];

    public function agendamentos(){
        return $this->hasMany('App\Agendamento');
    }
}
