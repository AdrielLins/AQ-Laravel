@extends('app')

@section('content')
    <div class="container">
        <h1>Editando jogador: {{$jogador->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["jogadores.update", $jogador->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $jogador->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dataNascimento', 'Data de Nascimento:') !!}
            {!! Form::date('dataNascimento', $jogador->dataNascimento, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sexo', 'Sexo:') !!}
            {!! Form::select('sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'), $jogador->sexo, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $jogador->email, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefoneCelular', 'Telefone Celular:') !!}
            {!! Form::text('telefoneCelular', $jogador->telefoneCelular, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefoneResidencial', 'Telefone Residencial:') !!}
            {!! Form::text('telefoneResidencial', $jogador->telefoneResidencial, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço:') !!}
            {!! Form::text('endereco', $jogador->endereco, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', $jogador->bairro, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('numero', 'Número:') !!}
            {!! Form::text('numero', $jogador->numero, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('complemento', 'Complemento:') !!}
            {!! Form::text('complemento', $jogador->complemento, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cidade', 'Cidade:') !!}
            {!! Form::text('cidade', $jogador->cidade, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estado', 'Estado:') !!}
            {!! Form::text('estado', $jogador->estado  , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', $jogador->cpf, ['class'=>'form-control']) !!}
        </div>

        <?php
        if ($jogador->situacao = 'Ativo'){
            $ativo = 'true';
            $inativo = 'false';
        } else if ($jogador->situacao = 'Inativo') {
            $ativo = 'false';
            $inativo = 'true';
        }
        ?>
        <div class="form-group">
            {!! Form::label('situacao', 'Situação:') !!}
            <br/>
            <label class="checkbox-inline">
                {!! Form::checkbox('situacao', 'Ativo', true) !!}
                Ativo</label>
            <label class="checkbox-inline">
                {!! Form::checkbox('situacao', 'Inativo', false) !!}
                Inativo</label>
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection