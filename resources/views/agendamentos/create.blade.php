@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Agendamento</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'agendamentos.store']) !!}

        <div class="form-group">
            {!! Form::label('jogador_id', 'Jogador:') !!}
            {{ Form::select('jogador_id', \App\Jogador::orderBy('nome')->pluck('nome','id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('usuario_id', 'Funcionário que realizou o agendamento:') !!}
            {{ Form::select('usuario_id', \App\User::orderBy('name')->pluck('name','id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('esporte_id', 'Esporte:') !!}
            {{ Form::select('esporte_id', \App\Esporte::orderBy('nome')->pluck('nome','id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('quadra_id', 'Quadra:') !!}
            {{ Form::select('quadra_id', \App\Quadra::orderBy('nome')->pluck('nome','id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('horario', 'Horário:') !!}
            {!! Form::time('horario', null, ['class'=>'form-control']) !!}
        </div>

        <div class="row" style="padding: 5px;">
            <div class="col-md-4">
                {!! Form::label('status', 'Status:') !!}
                {!! Form::text('status', 'Agendado', ['class'=>'form-control', 'readonly']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('observacoes', 'Observações:') !!}
            {!! Form::textarea('observacoes', null, ['class'=>'form-control', 'rows' => 3]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar agendamento', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection