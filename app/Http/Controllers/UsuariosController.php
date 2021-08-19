<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

//        $usuario = Usuario::select('id', 'nome', 'email', 'papel')->where('email', $email)->where('senha', $senha)->get();
        $usuario = Usuario::select('id', 'nome', 'email', 'senha', 'papel')->where('email', $email) -> get();
        if(Hash::check($senha, $usuario[0]->senha)){

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
        $user->senha = Hash::make($formulario->senha);
        $user->papel = $formulario->papel;

        $user->save();

        return redirect()->route('home.root');

    }

    public function temporary()
    {
        return view('usuarios.temporary');
    }

    public function view($id)
    {
        $user = Usuario::find($id);

        return view('usuarios.view', ['id' => $id, 'user' => $user]);
    }

    public function authors()
    {

        $users = Usuario::orderBy('id', 'desc')->get();

        return view('usuarios.authors', ['users' => $users]);
    }


}
