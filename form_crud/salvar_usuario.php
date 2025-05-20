<?php

include "./dados/conexao.php";
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if (isset($_POST["salvar_usuario"])) {
  
    $ativo = isset($_POST['ativo']) ? 1 : 0;
    $repo->Inserir($_POST['login'],$_POST['senha'],$ativo);
    header('location: usuarios.php');
}else{
    header('location: usuarios.php');}

?>