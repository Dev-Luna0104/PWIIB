<?php

include "./conexao.php";
require_once "../UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if (isset($_GET["id"])  && !empty($_GET["id"])) {
  
    $usuario = $repo->buscarPorId($_GET["id"]);
    if($usuario != null){
        $repo->excluirUsuario($_GET['id']);
    }

    header('location: ../usuarios.php');
}else{
    header('location: ../usuarios.php');
    
}

?>