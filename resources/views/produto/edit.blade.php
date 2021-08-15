@extends('templates.layout')
@section('title', 'Editar')
@section('content')

    <h1>Editar</h1>

    <div>
        <form method="post" action="{{route('produto.update', $prod)}}">
            @csrf
            @method('put')

            <p><input type="text" name="nome" placeholder="Nome" value="{{$prod->nome}}"></p>
            <p><input type="number" name="valor" placeholder="Preço" value="{{$prod->valor}}"></p>
            <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição">{{$prod->descricao}}</textarea></p>
            <p><input type="submit" value="Modificar"></p>
        </form>
    </div>

@endsection