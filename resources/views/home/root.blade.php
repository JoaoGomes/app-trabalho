@extends('templates.layout')
@section('title', 'Medium Pirata!')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_home.css') }}" >

    <h1>Medium Pirata!</h1>
    <h2>Bem-vindo a versão pirata do Medium</h2>

    <div class="container">
        <h2>Últimos adições</h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Título</div>
                <div class="col col-2">Autor</div>
                <div class="col col-3">Visualizações</div>
                <div class="col col-4"  style="text-align: center">Likes</div>
            </li>

            @foreach($textos as $texto)
                <li class="table-row">
                    <div class="col col-1"><a href="{{route('textos.info', $texto->id)}}">{{$texto->titulo}}</a></div>
                    <div class="col col-2"><a href="{{route('usuarios.profile', $texto->id_author)}}">{{$texto->author}}</a></div>
                    <div class="col col-3" style="text-align: center">{{$texto->visualizacoes}}</div>
                    <div class="col col-4" style="text-align: center">{{$texto->likes}}</div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection