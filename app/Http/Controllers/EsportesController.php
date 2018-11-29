<?php

namespace App\Http\Controllers;

use App\Esporte;
use App\Http\Requests\EsporteRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EsportesController extends Controller
{
    public function index(){
        $esportes = Esporte::all();
        return view('esportes.index', ['esportes'=>$esportes]);
    }

    public function create(){
        return view('esportes.create');
    }

    public function store(EsporteRequest $request){
        $novo_esporte = $request->all();
        Esporte::create($novo_esporte);

        return redirect()->route('esportes');
    }

    public function destroy($id){
        Esporte::find($id)->delete();
        return redirect()->route('esportes');
    }

    public function edit($id){
        $esporte = Esporte::find($id);
        return view('esportes.edit', compact('esporte'));
    }

    public function update(EsporteRequest $request, $id){
        $esporte = Esporte::find($id)->update($request->all());
        return redirect()->route('esportes');
    }
}
