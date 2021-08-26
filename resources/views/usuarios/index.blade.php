@extends('templates.layout')
@section('title', 'Login')
@section('content')
    <h1>Login</h1>

    @if (session('error'))
        {{session('error')}}
    @endif

    <form method="post" action="{{route('usuarios.login')}}">
        @csrf
        <br/>
        <p><input type="text" name="email" placeholder="Email"></p>
        <p><input type="password" name="senha" placeholder="Senha"></p>
        <br>
        <input type="submit" class="btn btn-outline-primary me-2" value="Acessar">
        <a  href="{{ route('usuarios.register')}}">
            <button type="button" class="btn btn-primary">Novo cadastro</button>
        </a>
    </form>



@endsection