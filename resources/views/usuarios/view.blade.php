@extends('templates.layout')
@section('title', 'Perfil de autor')
@section('content')
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_author.css') }}" >

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

    <div class="container">
        <h2>Listas de textos</h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Id</div>
                <div class="col col-2">Título</div>
                <div class="col col-3">Visualizações</div>
                <div class="col col-4"  style="text-align: center">Likes</div>
            </li>

            @foreach($texts as $text)
            <li class="table-row">
                <div class="col col-1">{{$text->id}}</div>
                <div class="col col-2"><a href="{{route('textos.info', $text->id)}}">{{$text->titulo}}</a></div>
                <div class="col col-3" style="text-align: center">{{$text->visualizacoes}}</div>
                <div class="col col-4" style="text-align: center">{{$text->likes}}</div>
            </li>
            @endforeach
        </ul>
    </div>

@endsection