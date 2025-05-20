<?php

include "../dados/conexao.php";
require_once "../UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if (isset($_POST['ID']) && isset($_POST['ATIVO']) ) {
  
    $repo->Editar($_POST['LOGIN'],$_POST['ID'],$_POST['ATIVO']);
    
    header('location: ../usuarios.php');
}else{
  
    header('location: ../usuarios.php');
}

?>