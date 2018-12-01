<?php

namespace App\Http\Controllers;

use App\Jogador;
use App\Http\Requests\JogadorRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JogadoresController extends Controller
{
    public function index(){
        $jogadores = Jogador::orderBy('nome')->paginate(5);
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
        try {
            Jogador::find($id)->delete();
            $ret = array('status'=>'ok', 'msg'=>"null");
        } catch(\Illuminate\Database\QueryException $e) {
           $ret = array('status'=>'erro', 'msg'=>$e->getMessage());
        }
        catch(\PDOException $e) {
           $ret = array('status'=>'erro', 'msg'=>$e->getMessage());
        }
        return $ret;
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
