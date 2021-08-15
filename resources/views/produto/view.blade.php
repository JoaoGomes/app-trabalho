@extends('templates.layout')
@section('title', 'View')
@section('content')
    <h1>Visualizar</h1>

    <p>Produto: {{$prod->nome}}</p>
    <p>Preço: <?php echo $prod->valor; ?></p>
    <p>{{$prod->descricao}}</p>
@endsection