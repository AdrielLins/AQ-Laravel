@extends('app')
@section('table-delete')
"agendamentos"
@endsection
@section('content')
    <div class="container">
        <h1>Agendamentos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Jogador</th>
                <th>Funcionário que agendou</th>
                <th>Esporte</th>
                <th>Quadra</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Status</th>
                <th>Observações</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($agendamentos as $agen)
                <tr>
                    <td>{{$agen->jogador->nome}}</td>
                    <td>{{$agen->usuario->name}}</td>
                    <td>{{$agen->esporte->nome}}</td>
                    <td>{{$agen->quadra->nome}}</td>
                    <td>{{$agen->data}}</td>
                    <td>{{$agen->horario}}</td>
                    <td>{{$agen->status}}</td>
                    <td>{{$agen->observacoes}}</td>
                    <td>
                        <a href="{{ route('agendamentos.edit', ['id'=>$agen->id]) }}" 
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onClick="return ConfirmaExclusao({{$agen->id}})" 
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $agendamentos->links() }}
		<br>
        <a href="{{ route('agendamentos.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Agendamento</a>
    </div>
@endsection
