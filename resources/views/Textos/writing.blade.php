@extends('templates.layout')
@section('title', 'New Text')
@section('content')
    <h1>Edição de texto</h1>

    <form method="post" action="">
        <textarea name="editor" id="editor" rows="10" cols="80">
        Vamos usar um editor de texto aqui
        </textarea>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

@endsection