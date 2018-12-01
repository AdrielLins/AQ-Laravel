<?php

namespace App\Http\Controllers;

use App\Esporte;
use App\Http\Requests\EsporteRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EsportesController extends Controller
{
    public function index(){
        $esportes = Esporte::orderBy('nome')->paginate(2);
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
        try {
            Esporte::find($id)->delete();
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
        $esporte = Esporte::find($id);
        return view('esportes.edit', compact('esporte'));
    }

    public function update(EsporteRequest $request, $id){
        $esporte = Esporte::find($id)->update($request->all());
        return redirect()->route('esportes');
    }
}
