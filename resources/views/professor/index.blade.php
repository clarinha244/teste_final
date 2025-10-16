@extends('layouts.app')

@section('title', 'dados do professor')

@section('content')

    <h1>Lista de Professores</h1>

    <table class="table table-striped table-striped">
        <thead>
            <th>Nome</th>
            <th>Disciplina</th>
            <th>Email</th>
            <th>Telefone</th>
        </thead>
        <tbody>
            @foreach ($professores as $professor)
        <tr>
        <td>{{ $professor->nome}}</td>
        <td>{{ $professor->disciplina}}</td>
        <td>{{ $professor->email}}</td>
        <td>{{ $professor->contatoProfessor->telefone}}</td>
        <td>
            <div class="d-flex" >
                <div class="m-1">
            <a class="btn btn-success"  href="{{ route('professor.edit',$professor->id)}}">Editar</a>
            </div>
            <div class="m-1">
            <a class="btn btn-success" href="{{ route('professor.show',$professor->id)}}">Visualizar</a>
            </div>
            <div class="m-1">
            <form action="{{route('professor.destroy',$professor->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Excluir</button>
            </form>
            </div>
            </div>
        </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection