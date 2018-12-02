<?php

namespace App\Http\Controllers;

use App\Quadra;
use App\Http\Requests\QuadraRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuadrasController extends Controller
{
    public function index(){
        $quadras = Quadra::orderBy('nome')->paginate(5);
        return view('quadras.index', ['quadras'=>$quadras]);
    }

    public function create(){
        return view('quadras.create');
    }

    public function store(QuadraRequest $request){
        $novo_quadra = $request->all();
        Quadra::create($novo_quadra);

        return redirect()->route('quadras');
    }

    public function destroy($id){
        try {
            Quadra::find($id)->delete();
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
        $quadra = Quadra::find($id);
        return view('quadras.edit', compact('quadra'));
    }

    public function update(QuadraRequest $request, $id){
        $quadra = Quadra::find($id)->update($request->all());
        return redirect()->route('quadras');
    }
}
