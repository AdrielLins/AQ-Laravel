@extends('app')

@section('content')
    <div class="container">
        <h1>Jogadores</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jogadores as $jog)
                <tr>
                    <td>{{$jog->nome}}</td>
                    <td>{{$jog->dataNascimento}}</td>
                    <td>{{$jog->sexo}}</td>
                    <td>{{$jog->email}}</td>
                    <td>
                        <a href="{{ route('jogadores.edit', ['id'=>$jog->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('jogadores.destroy', ['id'=>$jog->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('jogadores.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Jogador</a>
    </div>
@endsection