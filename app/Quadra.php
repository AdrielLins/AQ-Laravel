<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quadra extends Model
{
    protected $fillable = ['nome', 'descricao'];

    public function agendamentos(){
        return $this->hasMany('App\Agendamento');
    }
}
