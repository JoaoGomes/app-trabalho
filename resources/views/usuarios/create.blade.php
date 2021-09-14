@extends('templates.layout')
@section('title', 'Registrar novo usuário')
@section('content')

    <h1>Registrar novo usuário</h1>

    <div>
        <form method="post" action="{{route('usuarios.register')}}" enctype="multipart/form-data">
            @csrf
            <p><input type="text" name="nome" placeholder="Nome"></p>
            <p><input type="text" name="email" placeholder="E-mail"></p>
            <p><input type="password" name="senha" placeholder="Senha"></p>
            <p><input type="text" name="fone" placeholder="Telefone"></p>
            <p>Carregar imagem de perfil<br><input type="file" name="imagem"></p>
            <!-- <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea></p> -->
            <p><input type="submit" class="btn btn-outline-primary me-2" value="Registrar"></p>

        </form>
    </div>

@endsection