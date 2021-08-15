<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produto.index', ['prods' => $produtos]);
    }

    public function view($nome){
        return view('produto.view', ['nome' => $nome ]);
    }

    public function create(){
        return view('produto.create');
    }
}
