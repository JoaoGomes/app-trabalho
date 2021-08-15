<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return view('produto.index');
    }

    public function view($nome){
        return view('produto.view', ['nome' => $nome ]);
    }

    public function create(){
        return view('produto.create');
    }
}
