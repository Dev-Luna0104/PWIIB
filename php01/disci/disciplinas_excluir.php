<?php

include "../dados/conexao.php";
require_once "./disciplinaRepository.php";
$repo = new UsuarioRepository($conexao);

if (isset($_GET["id"])  && !empty($_GET["id"])) {
  
    $usuario = $repo->buscarPorId($_GET["id"]);
    if($usuario != null){
        $repo->excluirUsuario($_GET['id']);
    }

    header('location: ../disciplinas.php');
}else{
    header('location: ../disciplinas.php');
    
}

?>