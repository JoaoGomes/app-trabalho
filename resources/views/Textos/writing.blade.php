@extends('templates.layout')
@section('title', 'New Text')
@section('content')
    <h1>Novo texto</h1>

    <!-- Inclusão do CKEditor -->
        <div class="form-group">
            <form method="post" action="{{route('textos.posting')}}" enctype="multipart/form-data">
            @csrf
            <p><input type="text" name="titulo" placeholder="Insira um título"></p>
            <textarea class="ckeditor form-control" name="wysiwyg"></textarea>
            <p>Foto: <input type="file" name="imagem_texto"></p>
            <p><input type="submit" class="btn btn-outline-primary me-2" value="Publicar"></p>
        </form>
    </div>
@endsection