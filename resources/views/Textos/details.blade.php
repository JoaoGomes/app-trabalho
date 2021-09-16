@extends('templates.layout')
@section('title', 'Texto')
@section('content')


    <div>
        <img style="vertical-align: middle; width: 100%; height: 250px;" 
            src="{{asset('img/' . $texto->imagem_texto)}}">
    </div>

    <div  style="font-size: 55px">
        <h1><?php echo $texto->titulo; ?></h1>
    </div>

    <h3><a style="font-size: 20px" href="{{route('usuarios.profile', $texto->id_author)}}">{{$texto->author}}</a></h3>
    <div  style="font-size: 25px; font-family: Times New Roman">
        <p><?php echo $texto->texto; ?></p> 
    </div>
    <p style="font-size: 15px">Este texto já teve <?php echo $texto->visualizacoes; ?> visualizações.</p>
    <p style="font-size: 15px">Este texto já teve <?php echo $likes; ?> likes.</p>

    <div>
        <!-- Área reservada para login -->
        @if (session('usuario'))
            @if (session('usuario.id') == $texto->id_author)
                <a href="{{route('textos.editing', $texto->id)}}">
                    <button type="button" class="btn btn-outline-primary">Editar texto</button>
                </a>
            @else
                <button type="button" class="btn btn-outline-primary">Like</button>
                <!-- Aqui irá o método para gravar as curtidas na tabela de curtidas
                <a href="{route('likes.curtida_temp', $texto)}}">
                 Falta conectar o botão com um contador de likes - acesso ao banco de dados 
                    <button type="button" class="btn btn-outline-primary me-2">Like</button>
                </a>
                <div>
                    <form method="post" action="{route('likes.curtida_temp', $texto)}}">
                    csrf
                    method('put')
                        <p><input type="submit" class="btn btn-outline-primary me-2" value="Like"></p>
                    </form>
                </div>-->

            @endif
        @endif
    </div>


@endsection