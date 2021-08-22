<?php

/*require_once 'dbConfig.php' */

$editorContent = $statusMsg = '';

if(isset($_POST['submit']))
{
    $editorContent = $_POST['editor'];

    if(!empty($editorContent))
    {
        $insert = $db -> query("INSERT INTO editor (content, created) VALUES ('".$editorContent."', NOW())");
    
        if($insert)
        {
            $statusMsg = "O texto foi adicionado à sua conta com sucesso!";
        }else
        {
            $statusMsg = "Um problema ocorreu! Não conseguimos incluir seu texto. :/";
        }
    }else
    {
        $statusMsg = "Por favor, escreva seu texto.";
    }
}