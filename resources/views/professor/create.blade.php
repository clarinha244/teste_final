
@extends('layouts.app')

@section('title', 'dados do professor')

@section('content')
     <h1>Formulario do professor</h1>
    <form action="{{route("professor.store")}}" method="post" enctype="multipart/form-data">
        @csrf  
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="">Disciplina</label>
    <input type="text" name="disciplina" id="disciplina">
    <label for="">Email</label>
    <input type="email" name="email" id="email">
    <label for="">Telefone</label>
    <input type="text" name="telefone" id="telefone">
    
    
     <div class="row mb-3">
        <div class="col-md-6">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="">
        </div>
    <button type="submit">Enviar</button>
@endsection