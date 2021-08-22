<?php
    include_once 'submit.php';
?>


@extends('templates.layout')
@section('title', 'New Text')
@section('content')
    <h1>Edição de texto</h1>

    <!-- 
    <script src="ckeditor/ckeditor.js"></script>
    -->

    <?php if(!empty($statusMsg)){ 
        <p class="stmsg"><?php echo $statusMsg; ?></p>
        <?php } ?>

    <form method="post" action="">
        <textarea name="editor" id="editor" rows="10" cols="80">
        Vamos usar um editor de texto aqui
        </textarea>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php if(!empty($editorContent)){ ?>
        <div>
            <h2>Insira o seu texto </h2>
            <?php echo $editorContent; ?>
        </div>
    <?php } ?>

    <script>
    CKEDITOR.replace('editor');
    </script>
@endsection