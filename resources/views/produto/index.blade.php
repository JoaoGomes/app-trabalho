@extends('templates.layout')
@section('title', 'Index')
@section('content')
    <h1>Index de produtos</h1>
    <p>
        <a href="{{route('produto.inserir')}}" class="btn btn-primary">Inserir produto</a>
    </p>

    <table border="1">
        <tr>
            <th>Produtos</th>
            <th>Preço</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>

        @foreach($prods as $prod)
        <tr>
            <td><a href="{{route('produto.descricao', $prod->id)}}">{{$prod->nome}}</a></td>
            <td>{{$prod->valor}}</td>
            <td><a href="{{route('produto.editar', $prod->id)}}">Editar</a></td>
            <td><a href="{{route('produto.deletar', $prod->id)}}">Deletar</a></td>
            <td><img src="{{ asset('img/meia.jpg') }}"></td>
        </tr>
        @endforeach
    </table>


@endsection