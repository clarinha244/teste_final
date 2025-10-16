@extends('layouts.app')
@section('title', 'dados do Curso')
@section('content')
    
    <table class="table table-striped table-striped">
        <td>Nome</td>
        <thead></thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
            <td>{{ $curso->nome }}</td>
                <td>
                <div class="d-flex" >
                        <div class="m-1">
                    <a class="btn btn-success" href="{{ route('curso.edit',$curso->id)}}">Editar</a>
                       </div>
                       <div class="m-1">
                    <a class="btn btn-info" href="{{ route('curso.show',$curso->id)}}">Ver</a>
                    </div>
                 <div class="m-1">
                    <form action="{{route('curso.destroy',$curso->id)}}" method="post">
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
@endsection