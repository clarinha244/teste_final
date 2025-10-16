@extends('layouts.app')
@section('title', 'dados do Turma')
@section('content')
    
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Curso</th>

            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($turmas as $turma)
        <tr>
            <td>{{ $turma->descricao }}</td>
            <td>{{ $turma->curso->nome }}</td>

            <td>
                <div class="d-flex">
                    <div class="m-1">
                        <a class="btn btn-success" href="{{ route('turma.edit', $turma->id) }}">Editar</a>
                    </div>
                    <div class="m-1">
                        <a class="btn btn-info" href="{{ route('turma.show', $turma->id) }}">Ver</a>
                    </div>
                    <div class="m-1">
                        <form action="{{ route('turma.destroy', $turma->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" >Excluir </button>
                        </form>
                    </div>
                </div>
            </td>   
        </tr>
        @endforeach
    </tbody>
</table>

@endsection