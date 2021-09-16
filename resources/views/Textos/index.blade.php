@extends('templates.layout')
@section('title', 'Lista de textos')
@section('content')
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" >

<div class="container">
  <h2>Lista de Textos</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Título</div>
      <div class="col col-2">Autor</div>
      <div class="col col-3">Visualizações</div>
      <div class="col col-4">Likes</div>
    </li>

    @foreach($textos as $texto)
    <li class="table-row">
      <div class="col col-1" data-label="Job Id"><a href="{{route('textos.info', $texto->id)}}">{{$texto->titulo}}</a></div>
      <div class="col col-2" data-label="Customer Name"><a href="{{route('usuarios.profile', $texto->id_author)}}">{{$texto->author}}</a></div>
      <div class="col col-3" data-label="Amount">{{$texto->visualizacoes}}</div>
      <div class="col col-4" data-label="Payment Status">{{$texto->likes}}</div>
    </li>
    @endforeach
  </ul>
</div>

@endsection