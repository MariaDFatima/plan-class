<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function editar(Request $request, $livro){
        $request->validate([
            'autor' => "required",
            'titulo' => "required",
            'subtitulo' => "required",
            'edicao' => "required",
            'editora' => "required",
            'ano_de_publicacao' => "required",
        ]);

        Livro::where("id", $livro)->update($request->except("_token"));
        return redirect("/listar");
    }
    public function deletar($livro){
        Livro::where("id", $livro)->delete();
        return redirect("/listar");
    }
    public function cadastrar(Request $request){
        $request->validate([
            'autor' => "required",
            'titulo' => "required",
            'subtitulo' => "required",
            'edicao' => "required",
            'editora' => "required",
            'ano_de_publicacao' => "required",
        ]);

        Livro::create([
            'autor' => $request->autor,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'id_usuario' => auth()->user()->id,
            'edicao' => $request->edicao,
            'editora' => $request->editora,
            'ano_de_publicacao' => $request->ano_de_publicacao,
        ]);
        return redirect("/listar");
    }
}
