@extends('templates.layout')
@section('title', 'Texto')
@section('content')
    <h1>Perfil de <?php echo $user->author; ?></h1>

    <p>Autor: <?php echo $texto->author; ?></p>
    <p>Título: <?php echo $texto->author; ?></p>
    <p><?php echo $texto->texto; ?></p> 

@endsection