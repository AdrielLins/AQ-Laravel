@extends('app')

@section('content')
    <div class="container">
        <h1>Editando esporte: {{$esporte->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["esportes.update", $esporte->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $esporte->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('duracao', 'Duração:') !!}
            {!! Form::time('duracao', $esporte->duracao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::text('valor', $esporte->valor, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection