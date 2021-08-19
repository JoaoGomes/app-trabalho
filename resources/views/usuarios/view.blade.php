@extends('templates.layout')
@section('title', 'Perfil de autor')
@section('content')
    <h1>Perfil de <?php echo $user->nome; ?></h1>

    <!-- Esta linha não está funcionando por algum motivo 
    <p>Produto: {{$user->name}}</p> -->
    <p>Nome: <?php echo $user->nome; ?></p>
    <p>E-mail de contato: <?php echo $user->email; ?></p> 
    <p>Textos</p> 
@endsection