<?php

namespace App\Http\Controllers;

use App\Jogador;
use App\Http\Requests\JogadorRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JogadoresController extends Controller
{
    public function index(){
        $jogadores = Jogador::all();
        return view('jogadores.index', ['jogadores'=>$jogadores]);
    }

    public function create(){
        return view('jogadores.create');
    }

    public function store(JogadorRequest $request){
        $novo_jogador = $request->all();
        Jogador::create($novo_jogador);

        return redirect()->route('jogadores');
    }

    public function destroy($id){
        Jogador::find($id)->delete();
        return redirect()->route('jogadores');
    }

    public function edit($id){
        $jogador = Jogador::find($id);
        return view('jogadores.edit', compact('jogador'));
    }

    public function update(JogadorRequest $request, $id){
        $jogador = Jogador::find($id)->update($request->all());
        return redirect()->route('jogadores');
    }

}
