<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
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
        User::find($id)->delete();
        return redirect()->route('users');
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
