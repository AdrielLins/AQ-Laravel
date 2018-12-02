@extends('app')

@section('content')
    <div class="container">
        <h1>Editando funcionário: {{$user->name}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["users.update", $user->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
        </div>        
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Senha:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection