@extends('templates.layout')
@section('title', 'Lista de textos')
@section('content')
    <h1>Lista de textos</h1>

    <table border="1">
        <tr style="padding: 15px; font-size: 25px">
            <th style="padding: 5px">Título</th>
            <th style="padding: 5px">Autor</th>
            <th style="padding: 5px">Visualizações</th>
            <th style="padding: 5px">Likes</th>
        </tr>

        @foreach($textos as $texto)
            <tr>
                <td style="align: center"><a href="{{route('textos.info', $texto->id)}}">{{$texto->titulo}}</a></td>
                <td style="text-align:center"><a href="{{route('usuarios.profile', $texto->id_author)}}">{{$texto->author}}</a></td>
                <td style="text-align:center">{{$texto->visualizacoes}}</td>
                <td style="text-align:center"> {{$texto->likes}} </td>
            </tr>
        @endforeach
    </table>

@endsection