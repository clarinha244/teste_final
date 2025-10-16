<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\ContatoProfessor;
class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professores = Professor::all();
        return view('professor.index',compact('professores'));
    }
    public function contato()
   {
   return view('professor.contato');
}
    
    public function create()
    {
        return view ('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $nome_arquivo = pathinfo($request->foto->getClientOriginalName(),PATHINFO_FILENAME);
        $foto = $request->file('foto')->getClientOriginalName();
        $extensao_arquivo = $request->file('foto')->getClientOriginalExtension();
        $foto = $nome_arquivo.'-'.time(). '-'.$extensao_arquivo;

        $request->foto->move(public_path('imagens'),$foto);

        Professor::create([
            'nome' => $request->nome,
            'disciplina' => $request->disciplina,
            'email' => $request->email,
            'telefone' => $request->contatoProfessor,
             'foto' => 'imagens/' . $foto
        ]);
        return redirect()->route('professor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $professor = Professor::find($id);
       return view('professor.show', compact('professor'));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = Professor::find($id);
        return view('professor.edit',compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                  $nome_arquivo = pathinfo($request->foto->getClientOriginalName(),PATHINFO_FILENAME);
        $foto = $request->file('foto')->getClientOriginalName();
        $extensao_arquivo = $request->file('foto')->getClientOriginalExtension();
        $foto = $nome_arquivo.'-'.time(). '-'.$extensao_arquivo;

          $request->foto->move(public_path('imagens'),$foto);
        $professor = Professor::find($id);
        $professor->update([
             'nome' => $request->nome,
            'disciplina' => $request->disciplina,
            'email' => $request->email,
            'telefone' => $request->contatoProfessor,
             'foto' => 'imagens/' . $foto
        ]);
        return redirect()->route('professor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = Professor::find($id);
        $id_contato_professor =$professor->contatoProfessor->id;
        $contato_professor= ContatoProfessor::find($id_contato_professor);
        $contato_professor->delete();
        $professor->delete();
        return redirect()->route('professor.index');
    }
}
 
