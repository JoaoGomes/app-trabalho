@extends('templates.layout')
@section('title', 'Perfil de autor')
@section('content')
    <h1>Perfil de <?php echo $user->nome; ?></h1>

    <!-- Esta linha não está funcionando por algum motivo 
    <p>Produto: {{$user->name}}</p> -->
    <p>Nome: <?php echo $user->nome; ?></p>
    <p>E-mail de contato: <?php echo $user->email; ?></p> 


    <h2>Lista de textos</h2>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Visualizações</th>
            <th>Likes</th>
        </tr>


        <tr>
<!--            <td><a href="{{route('usuarios.profile', $text->id)}}">{{$text->nome}}</a></td>
            <td><a href="{{route('usuarios.profile', $text->id)}}">{{$text->id}}</a></td>
            -->
            <td>{{$text->id}}</td>
            <td><a href="{{route('textos.info', $text->id)}}">{{$text->titulo}}</a></td>
            <td>{{$text->visualizacoes}}</td>
            <td>{{$text->likes}}</td>
        </tr>

    </table>

@endsection