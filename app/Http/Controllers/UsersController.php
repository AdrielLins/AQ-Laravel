<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(){
        $users = User::orderBy('name')->paginate(5);
        return view('users.index', ['users'=>$users]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(UserRequest $request){
        $novo_user = $request->all();
        User::create($novo_user);

        return redirect()->route('users');
    }

    public function destroy($id){
        try {
            User::find($id)->delete();
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
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id){
        $user = User::find($id)->update($request->all());
        return redirect()->route('users');
    }

}
