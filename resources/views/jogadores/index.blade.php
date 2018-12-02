@extends('app')
@section('table-delete')
"jogadores"
@endsection
@section('content')
    <div class="container">
        <h1>Jogadores</h1>

        {!! Form::open(['name'=>'form_name','route'=>'jogadores']) !!}
        <div class="sidebar-form">
            <div class="input-group input-group-lg">
                <input type="text" name="filtragem" class="form-control"
                style="width:100% !important;" placeholder="Pesquisa...">
                <span class="input-group-bth">
                    <button type="submit" name="search" id="search-btn" class="btn btn-default">
                        <i class="fa fa-search">Buscar</i>
                    </button>
                </span>
            </div>
        </div>
        {!! Form::close() !!}

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
                        <a href="{{ route('jogadores.edit', ['id'=>$jog->id]) }}" 
                            class="btn-sm btn-success">Editar</a>
                            <a href="#" onClick="return ConfirmaExclusao({{$jog->id}})" 
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $jogadores->links() }}
		<br>
        <a href="{{ route('jogadores.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Jogador</a>
    </div>
@endsection