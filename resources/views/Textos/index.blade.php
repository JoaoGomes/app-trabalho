@extends('templates.layout')
@section('title', 'Lista de textos')
@section('content')
    <h1>Lista de textos</h1>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Autor</th>
        </tr>

        @foreach($textos as $texto)
        <tr>
            <td>{{$texto->id_text}}</td>
            <td>{{$texto->author}}</td>
            <td><a href="{{route('usuarios.temporary')}}">Link</a></td>
        </tr>

        @endforeach
    </table>

@endsection