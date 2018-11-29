@extends('app')

@section('content')
    <div class="container">
        <h1>Editando funcionário: {{$user->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["users.update", $user->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $user->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('login', 'Login:') !!}
            {!! Form::text('login', $user->login, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Senha:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', $user->telefone, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::select('sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'), $user->sexo, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dataCriacao', 'Data Criação:') !!}
            {!! Form::date('dataCriacao', $user->dataCriacao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection