@extends('layouts.app')
@section('title', 'Dados da curso')
@section('content')
<h1>Dados da curso</h1>
    <p>Nome: {{ $curso->nome}}</p>

    @endsection