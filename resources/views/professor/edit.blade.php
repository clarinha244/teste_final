@extends('layouts.app')

@section('title', 'editar professor')

@section('content')
    <h1>Editar Professor</h1>
    <form action="{{route("professor.update", $professor->id) }}" method="post">
        @csrf  
        @method('PUT')
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome" value="{{$professor->nome}}">
    <label for="">Disciplina</label>
    <input type="text" name="disciplina" id="disciplina" value="{{$professor->disciplina}}">
    <label for="">Email</label>
    <input type="email" name="email" id="email" value="{{$professor->email}}">
    <label for="">Telefone</label>
    <input type="text" name="telefone" id="telefone" value="{{$professor->contatoProfessor->telefone}}">
    
    <button type="submit">Enviar</button>

    </form>
