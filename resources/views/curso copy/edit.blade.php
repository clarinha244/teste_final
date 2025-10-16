
@section('content')
    <h1>Editar turma</h1>
   <form action="{{ route('turma.update', $turma->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" id="descricao" value="{{ $turma->descricao }}">

    <label for="curso_id">Curso</label>
    <select name="curso_id" id="curso_id">
        <option value="{{ $turma->curso_id }}" selected>{{ $turma->curso->nome }}</option>
        @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
        @endforeach
    </select>

    <button type="submit">Enviar</button>
</form>
