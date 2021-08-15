<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return 'Raiz de produtos';
    }

    public function show($nome){
        return 'Mostrando produtos {$nome}';
    }

    public function create(){
        return 'Inserindo produto';
    }
}
