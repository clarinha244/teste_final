@extends('layouts.app')

@section('title', 'editar aluno')

@section('content')
    <h1>Editar Aluno</h1>
    <form action="{{route("aluno.update", $aluno->id) }}" method="post" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome" value="{{$aluno->nome}}">
    <label for="">Email</label>
    <input type="text" name="email" id="email" value="{{$aluno->email}}">
    <label for="">Datas de nascimento</label>
    <input type="date" name="data_nascimento" id="data_nascimento" value="{{$aluno->data_nascimento}}">
    <label for="">Turma</label>
    <input type="text" name="turma" id="turma" value="{{$aluno->turma}}">
     <label for="">Telefone</label>
    <input type="text" name="telefone" id="telefone" value="{{$aluno->contatoAluno->telefone}}">

    <button type="submit">Enviar</button>

    </form>
@endsection