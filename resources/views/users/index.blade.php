@extends('app')
@section('table-delete')
"users"
@endsection
@section('content')
    <div class="container">
        <h1>Funcionários</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $usr)
                <tr>
                    <td>{{$usr->name}}</td>
                    <td>{{$usr->email}}</td>
                    <td>
                        <a href="{{ route('users.edit', ['id'=>$usr->id]) }}" 
                            class="btn-sm btn-success">Editar</a>
                            <a href="#" onClick="return ConfirmaExclusao({{$usr->id}})" 
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('users.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Funcionário</a>
    </div>
@endsection