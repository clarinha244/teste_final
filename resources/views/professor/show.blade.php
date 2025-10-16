@extends('layouts.app')
@section('title', 'dados do professor')
@section('content')
    <h1>Dados dos Professores</h1>
    <p>Nome: {{ $professor->nome}}</p>
    <p>Disciplina: {{ $professor->disciplina}}</p>
    <p>Email: {{ $professor->email}}</p>
    <p>Telefone: {{ $professor->contatoProfessor->telefone}}</p>
       <img src="{{ asset($professor->foto) }}" alt="" style="max-width: 400px">
@endsection

