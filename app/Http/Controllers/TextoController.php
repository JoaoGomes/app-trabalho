<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Texto;
use App\Models\Likes;

class TextoController extends Controller
{
    //
    public function writing()
    {
        return view('textos.writing');
    }

    public function posting(Request $texto)
    {
        $novo_texto = new Texto();
        $novo_texto->author = session('usuario.nome');
        $novo_texto->id_author = session('usuario.id');
        $novo_texto->visualizacoes = 0;
        $novo_texto->likes = 0;
        $novo_texto->texto = $texto->wysiwyg;
        $novo_texto->titulo = $texto->titulo;
        $novo_texto->imagem_texto = $texto->file('imagem_texto')->store('', 'imagens');

        $novo_texto->save();

        return redirect()->route('usuarios.authors');
    }

    public function texts()
    {
        // Ordena os textos pela última data de modificação
        $textos = Texto::orderBy('visualizacoes', 'desc')->get();

        return view('textos.index', ['textos' => $textos]);
    }


    public function read($id_text)
    {
        $texto = Texto::find($id_text);
        $temp = Likes::select('id')->where('id_texto', $id_text) -> get();
        $like = count($temp);

        return view('textos.details', ['id_text' => $id_text, 'texto' => $texto, 'likes' => $like]);

    }

    public function editing(Texto $texto)
    {
        return view('textos.edit', ['texto'=>$texto]);
    }

    public function publishing(Texto $texto, Request $novo_texto)
    {
        $texto->author = session('usuario.nome');
        $texto->id_author = session('usuario.id');
        $texto->titulo = $novo_texto->titulo;
        $texto->texto = $novo_texto->wysiwyg;

        $texto->save();

        return redirect()->route('home.root');
    }


}
