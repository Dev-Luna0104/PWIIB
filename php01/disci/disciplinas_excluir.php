<?php

include "../dados/conexao.php";
require_once "./disciplinasRepository.php";
$repo = new disciplinasRepository($conexao);

if (isset($_GET["id"])  && !empty($_GET["id"])) {
  
    $usuario = $repo->buscarPorId($_GET["id"]);
    if($usuario != null){
        $repo->excluirDisciplina($_GET['id']);
    }

    header('location: ../disciplinas.php');
}else{
    header('location: ../disciplinas.php');
    
}

?>