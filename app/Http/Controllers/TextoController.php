<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Texto;

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
        $novo_texto->texto = $texto->wysiwyg;
        $novo_texto->titulo = $texto->titulo;

        $novo_texto->save();

        return redirect()->route('usuarios.authors');
    }

    public function texts()
    {
        // Ordena os textos pelo ID - Ideia é mudar para ordenar pelo número de textos ou alfabeticamente
        $textos = Texto::orderBy('id_text', 'desc')->get();

        return view('textos.index', ['textos' => $textos]);
    }


    public function read($id_text)
    {
        $texto = Texto::find($id_text);

        return view('textos.details', ['id_text' => $id_text, 'texto' => $texto]);

    }

}
