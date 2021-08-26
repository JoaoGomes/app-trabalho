@extends('templates.layout')
@section('title', 'Medium Pirata!')
@section('content')
    <h1>Medium Pirata!</h1>
    <h2>Bem-vindo a minha versão caseira do Medium</h2>
    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Visualizações</th>
            <th>Likes</th>
        </tr>

        @foreach($textos as $texto)
            <tr>
                <td><a href="{{route('textos.info', $texto->id)}}">{{$texto->titulo}}</a></td>
                <td><a href="{{route('usuarios.profile', $texto->id_author)}}">{{$texto->author}}</a></td>
                <td>{{$texto->visualizacoes}}</td>
                <td>{{$texto->likes}}</td>
            </tr>
        @endforeach
    </table>

@endsection