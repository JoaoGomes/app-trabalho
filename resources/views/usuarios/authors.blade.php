@extends('templates.layout')
@section('title', 'Lista de autores')
@section('content')
    <h1>Lista de Autores</h1>

    
    <table border="1" style="margin-left: auto; margin-right: auto">
        @foreach($users as $user)
        <tr>
            <td><div style="padding: 15px;">
                <img style="vertical-align: middle; width: 50px; height: 50px; border-radius: 30%;" src="{{asset('img/' . $user->imagem)}}">
            </div></td>
            <td style="font-size: 20px; padding: 15px;"><a href="{{route('usuarios.profile', $user->id)}}">{{$user->nome}}</a></td>
        </tr>
        @endforeach
    </table>

@endsection