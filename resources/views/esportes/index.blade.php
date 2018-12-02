@extends('app')
@section('table-delete')
"esportes"
@endsection
@section('content')
    <div class="container">    
        <h1>Esportes</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Duração</th>
                <th>Valor</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($esportes as $esp)
                <tr>
                    <td>{{$esp->nome}}</td>
                    <td>{{$esp->duracao}}</td>
                    <td>R$: {{$esp->valor}}</td>
                    <td>
                        <a href="{{ route('esportes.edit', ['id'=>$esp->id]) }}" 
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$esp->id}})" 
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $esportes->links() }}
		<br>
        <a href="{{ route('esportes.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Esporte</a>
    </div>
@endsection
