@extends('templates.layout')
@section('title', 'Texto')
@section('content')
    <h1><?php echo $texto->titulo; ?></h1>

    <h3><a href="{{route('usuarios.profile', $texto->id_author)}}">{{$texto->author}}</a></h3>
    <p><?php echo $texto->texto; ?></p> 

@endsection