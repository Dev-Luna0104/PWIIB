<?php

include "../dados/conexao.php";
require_once "./referenciasRepository.php";
$repo = new referenciasRepository($conexao);

if (isset($_POST['ID']) ) {
  
    $repo->Editar($_POST['NOME'],$_POST['ID']);
    
    header('location: ../referencias.php');
}else{
  
    header('location: ../referencias.php');
}

?>