<?php

namespace App\Http\Controllers;

use App\Agendamento;
use App\Http\Requests\AgendamentoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendamentosController extends Controller
{
    public function index(){
        $agendamentos = Agendamento::orderBy('horario')->paginate(5);
        return view('agendamentos.index', ['agendamentos'=>$agendamentos]);
    }

    public function create(){
        return view('agendamentos.create');
    }

    public function store(AgendamentoRequest $request){
        $novo_agendamento = $request->all();
        Agendamento::create($novo_agendamento);

        return redirect()->route('agendamentos');
    }

    public function destroy($id){
        try {
            Agendamento::find($id)->delete();
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
        $agendamento = Agendamento::find($id);
        return view('agendamentos.edit', compact('agendamento'));
    }

    public function update(AgendamentoRequest $request, $id){
        $agendamento = Agendamento::find($id)->update($request->all());
        return redirect()->route('agendamentos');
    }

}
