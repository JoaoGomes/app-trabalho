@extends('templates.layout')
@section('title', 'Texto')
@section('content')
    <h1><?php echo $texto->titulo; ?></h1>

    <h3><a href="{{route('usuarios.profile', $texto->id_author)}}">{{$texto->author}}</a></h3>
    <p><?php echo $texto->texto; ?></p> 
    <p>Este texto já teve <?php echo $texto->visualizacoes; ?> visualizações.</p>
    <p>Este texto já teve <?php echo $texto->likes; ?> likes.</p>

    <div>
        @if (session('usuario'))
        <a>
        <!-- Falta conectar o botão com um contador de likes - acesso ao banco de dados -->
            <button type="button" class="btn btn-outline-primary me-2">Like</button>
        </a>

        <!-- Área reservada para login -->
        @if (session('usuario.id') == $texto->id_author)
            <a href="{{route('textos.editing', $texto->id)}}">
                <button type="button" class="btn btn-outline-primary">Editar texto</button>
            </a>
        @endif



        @endif
    </div>


@endsection