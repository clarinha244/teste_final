@extends('layouts.app')
@section('title', 'dados do Aluno')
@section('content')
    <h1>Lista de alunos</h1>
    @a
    <table class="table table-striped table-striped">
        <td>Nome</td>
        <td>Email</td>
        <td>Data de nascimento</td>
        @auth 
        
        <thead></thead>
        <tbody>
            @foreach ($alunos as $aluno)
            <tr>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->email}}</td>
            <td>{{ $aluno->data_nascimento}}</td>
                <td>

                <div class="d-flex" >
                        <div class="m-1">
                    <a class="btn btn-success" href="{{ route('aluno.edit',$aluno->id)}}">Editar</a>
                       </div>
                       <div class="m-1">
                    <a class="btn btn-info" href="{{ route('aluno.show',$aluno->id)}}">Ver</a>
                    </div>
                 <div class="m-1">
                    <form action="{{route('aluno.destroy',$aluno->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button  class="btn btn-danger" type="submit">Excluir</button>
                    </form>
                  </div>
                </div>
                </td>   
            </tr>
            @endforeach
        </tbody>
    </table>

	<td>
        <div>
            <h3>Alunos que fazem aniversário na data de 10/05/2005</h3>
            	@foreach ($alunos_nascimento_0510 as $aluno)
            		<p>Nome: {{ $aluno->nome }}</p>
            	@endforeach
        </div>
    </td>
@endsection