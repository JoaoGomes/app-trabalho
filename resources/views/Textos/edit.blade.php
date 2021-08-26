@extends('templates.layout')
@section('title', 'Editar')
@section('content')

    <h1>Edição de texto</h1>

    <div>
        <form method="post" action="{{route('textos.publishing', $texto)}}">
            @csrf
            @method('put')

            <p><input type="text" name="titulo" placeholder="Titulo" value="{{$texto->titulo}}"></p>
            <textarea class="ckeditor form-control" name="wysiwyg">{{$texto->texto}}</textarea>
            <p><input type="submit" class="btn btn-outline-primary me-2" value="Publicar"></p>
        </form>
    </div>

@endsection