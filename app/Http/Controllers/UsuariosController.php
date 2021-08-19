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

            return redirect()->route('usuarios.index')->with('error', 'Usuário ou senha inválidos!');

        }

        return $usuario;
    }

    public function logout(){
        session()->forget('usuario');

        return redirect()->route('home.root');
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function register(Request $formulario){
        $user = new Usuario();
        $user->nome = $formulario->nome;
        $user->email = $formulario->email;
        $user->senha = $formulario->senha;
        $user->papel = $formulario->papel;

        $user->save();

        return redirect()->route('home.root');

    }

}
