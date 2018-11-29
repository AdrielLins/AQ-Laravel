@extends('app')

@section('content')
    <div class="container">
        <h1>Editando agendamento: {{$agendamento->jogador->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["agendamentos.update", $agendamento->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('jogador_id', 'Jogador:') !!}
            {{ Form::select('jogador_id', \App\Jogador::orderBy('nome')->pluck('nome','id')->toArray(), $agendamento->jogador_id, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('usuario_id', 'Funcionário que realizou o agendamento:') !!}
            {{ Form::select('usuario_id', \App\User::orderBy('nome')->pluck('nome','id')->toArray(), $agendamento->usuario_id, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('esporte_id', 'Esporte:') !!}
            {{ Form::select('esporte_id', \App\Esporte::orderBy('nome')->pluck('nome','id')->toArray(), $agendamento->procedimento_id, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data', $agendamento->data, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('horario', 'Horário:') !!}
            {!! Form::time('horario', $agendamento->horario, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            {!! Form::select('status', array('Agendado' => 'Agendado',
                                                  'Cancelado' => 'Cancelado',
                                                  'Pago' => 'Pago',
                                                  'Não compareceu' => 'Não compareceu',
                                                  $agendamento->status, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('observacoes', 'Observações:') !!}
            {!! Form::textarea('observacoes', $agendamento->observacoes, ['class'=>'form-control', 'rows' => 3]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection