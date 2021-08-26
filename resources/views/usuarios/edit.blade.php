@extends('templates.layout')
@section('title', 'Editar perfil')
@section('content')

    <h1>Edição do perfil</h1>

    <div>
        <form method="post" action="{{route('usuarios.publishing', $user)}}">
            @csrf
            @method('put')

            <p><input type="text" name="nome" placeholder="{{$user->nome}}" value="{{$user->nome}}"></p>
            <p><input type="text" name="email" placeholder="{{$user->email}}" value="{{$user->email}}"></p>
            <p><input type="submit" class="btn btn-outline-primary me-2" value="Editar"></p>
        </form>
    </div>

@endsection