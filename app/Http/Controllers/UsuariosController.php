<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    // Controlador
    public function index(){
        return view('usuarios.index');
    }
    public function login(Request $form){
        $email = $form->email;
        $senha = $form->senha;

        $usuario = Usuario::select('id', 'nome', 'email', 'papel')->where('email', $email)->where('senha', $senha)->get();

        if($usuario->count()){
            $form->session()->put('usuario', $usuario[0]);

            return redirect()->route('produto');

        } else {

            return redirect()->route('usuario.index')->with('error', 'Usuário ou senha inválidos!');

        }

        return $usuario;
    }

    public function logout(){
        session()->forget('usuario');

        return redirect()->route('usuario.index');
    }

    public function register(Request $form){
        $email = $form->email;
        $senha = $form->senha;
        $username = $form->username;

        return redirect()->route('home.root');
    }

    public function insert(Request $formulario)
    {
//        $produto = new User();
//        $produto->nome = $formulario->nome;
//        $produto->valor = $formulario->valor;
//        $produto->descricao = $formulario->descricao;

//        $produto->save();

        return redirect()->route('produto');

    }

}
