@extends('templates.layout')
@section('title', 'Login')
@section('content')
    <h1>Login</h1>

    @if (session('error'))
        {{session('error')}}
    @endif

    <form method="post" action="{{route('usuario.login')}}">
        @csrf
        <input type="text" name="email">
        <br>
        <input type="password" name="senha">
        <br>
        <input type="submit" value="Acessar">
    </form>



@endsection