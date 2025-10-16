@extends('layouts.app')

@section('title', 'dados do aluno')

@section('content')
    <h1>Cadastro de aluno</h1>
    <form action="{{route("aluno.store")}}" method="post" enctype="multipart/form-data">
        @csrf  
    <label for="">Matricula</label>
    <input type="text" name="matricula" id="Matricula">
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="">Email</label>
    <input type="text" name="email" id="email">
    <label for="">Datas de nascimento</label>
    <input type="date" name="data_nascimento" id="data_nascimento">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="">
        </div>
        <label for="" >Turma:</label>
        <select name="turma_id" id="turma_id">
            <option value="">Selecione</option>
            @foreach($turmas as $turma)
            <option value="{{$turma->id}}">{{$turma->descricao}}</option>
            @endforeach
        </select>
        
    <div class="row mb-3"> <br>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" name="telefone" id="telefone">
        </div>
    </div> <br>
    <button type="submit">Salvar</button>

    </form>
@endsection