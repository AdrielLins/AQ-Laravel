<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esporte extends Model
{
    protected $fillable = ['nome', 'duracao', 'valor'];

    public function agendamentos(){
        return $this->hasMany('App\Agendamento');
    }
}
