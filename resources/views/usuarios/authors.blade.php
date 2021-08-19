@extends('templates.layout')
@section('title', 'Lista de autores')
@section('content')
    <h1>Lista de Autores></h1>

    <table border="1">
        <tr>
            <th>Autores</th>
            <th>Número de textos</th>
            <th>Visualizações</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td><a href="{{route('usuarios.profile', $user->id)}}">{{$user->nome}}</a></td>
            <td><a href="{{route('usuarios.profile', $user->id)}}">{{$user->nome}}</a></td>
            <td><a href="{{route('usuarios.profile', $user->id)}}">{{$user->nome}}</a></td>
        </tr>

        @endforeach
    </table>

@endsection