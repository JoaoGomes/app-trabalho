@extends('templates.layout')
@section('title', 'View')
@section('content')
    <h1>Visualizar</h1>

    <!-- Esta linha não está funcionando por algum motivo 
    <p>Produto: {{$prod->name}}</p> -->
    <p>Produto: <?php echo $prod->nome; ?></p>
    <p>Preço: <?php echo $prod->valor; ?></p> 
    <p>{{$prod->descricao}}</p> 
@endsection