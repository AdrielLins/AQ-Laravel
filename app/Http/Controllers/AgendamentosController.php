<?php

namespace App\Http\Controllers;

use App\Agendamento;
use App\Http\Requests\AgendamentoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendamentosController extends Controller
{
    public function index(){
        $agendamentos = Agendamento::all();
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
        Agendamento::find($id)->delete();
        return redirect()->route('agendamentos');
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
