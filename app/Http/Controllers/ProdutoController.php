<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('id', 'desc')->get();
        //$produtos = Produto::orderBy('valor', 'desc')->get();
        //return $produtos;
        return view('produto.index', ['prods' => $produtos]);
    }

    public function view($id)
    {
        $prod = Produto::find($id);

        return view('produto.view', ['id' => $id, 'prod' => $prod]);
    }

    /*public function insert()
    {
        return 'Inserir';
    }*/
    
    public function insert(Request $formulario)
    {
        $produto = new Produto();
        $produto->nome = $formulario->nome;
        $produto->valor = $formulario->valor;
        $produto->descricao = $formulario->descricao;

        $produto->save();

        return redirect()->route('produto');

    }

    public function create()
    {
        return view('produto.create');
    }

    public function edit(Produto $prod)
    {
        return view('produto.edit', ['prod'=>$prod]);
    }

    public function update(Produto $produto, Request $formulario)
    {
        $produto->nome = $formulario->nome;
        $produto->valor = $formulario->valor;
        $produto->descricao = $formulario->descricao;

        $produto->save();

        return redirect()->route('produto');

    }

    public function delete(Produto $prod)
    {
        $prod->delete();
        return redirect()->route('produto');
    }
}


// Editores de texto
// Editor WYSIWYG
// Tiny MCE
// summernote
// ckeditor