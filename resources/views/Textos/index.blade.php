@extends('templates.layout')
@section('title', 'Lista de textos')
@section('content')
    <h1>Lista de textos</h1>

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