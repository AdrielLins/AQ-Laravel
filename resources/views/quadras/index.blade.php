@extends('app')
@section('table-delete')
"quadras"
@endsection
@section('content')
    <div class="container">    
        <h1>Quadras</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($quadras as $esp)
                <tr>
                    <td>{{$esp->nome}}</td>
                    <td>{{$esp->descricao}}</td>
                    <td>
                        <a href="{{ route('quadras.edit', ['id'=>$esp->id]) }}" 
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$esp->id}})" 
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $quadras->links() }}
		<br>
        <a href="{{ route('quadras.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Quadra</a>
    </div>
@endsection
