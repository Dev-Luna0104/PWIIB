<?php

include "../dados/conexao.php";
require_once "./perguntasRepository.php";
$repo = new PerguntaRepository($conexao);

if (isset($_GET["id"])  && !empty($_GET["id"])) {
  
    $pergunta = $repo->buscarPorId($_GET["id"]);
    if($pergunta != null){
        $repo->Excluir($_GET['id']);
    }

    header('location: ../perguntas.php');
}else{
    header('location: ../perguntas.php');
    
}

?>