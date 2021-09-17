@extends('templates.layout')
@section('title', 'Lista de autores')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_list_author.css') }}" >

    <div class="container">
        <h1>Lista de Autores</h1>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1"></div>
                <div class="col col-2">Autor</div>
                <div class="col col-3">Textos</div>
            </li>

            @foreach($users as $user)
                <li class="table-row">
                    <div class="col col-1"><img style="vertical-align: middle; width: 50px; height: 50px; border-radius: 30%;" src="{{asset('img/' . $user->imagem)}}"></div>
                    <div class="col col-2"><a href="{{route('usuarios.profile', $user->id)}}">{{$user->nome}}</a></div>
                    <div class="col col-3" style="text-align: center">0</div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection