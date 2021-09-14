@extends('templates.layout')
@section('title', 'Perfil de autor')
@section('content')
    <h1>Perfil de <?php echo $user->nome; ?></h1>
    <br>

    <p>E-mail de contato: <?php echo $user->email; ?></p> 
    <br>

    <!-- Área reservada para login -->
    @if (session('usuario.id') == $user->id)
        <a href="{{ route('usuarios.editing', $user)}}">
            <button type="button" class="btn btn-outline-primary">Editar perfil</button>
        </a>
    @endif


    <h2>Lista de textos</h2>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Visualizações</th>
            <th>Likes</th>
        </tr>
        <tr>
            <td>{{$text->id}}</td>
            <td><a href="{{route('textos.info', $text->id)}}">{{$text->titulo}}</a></td>
            <td>{{$text->visualizacoes}}</td>
            <td>{{$text->likes}}</td>
        </tr>

    </table>

@endsection