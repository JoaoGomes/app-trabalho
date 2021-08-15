@extends('templates.layout')
@section('title', 'Inserir')
@section('content')

    <h1>Inserir</h1>

    <div>
        <form method="post" action="{{route('produto.gravar')}}">
            @csrf
            <p><input type="text" name="nome" placeholder="Nome"></p>
            <p><input type="number" name="valor" placeholder="Preço"></p>
            <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea></p>
            <p><input type="submit" value="Gravar"></p>
        </form>
    </div>

@endsection