<?php

include "../dados/conexao.php";
require_once "./disciplinasRepository.php";
$repo = new disciplinasRepository($conexao);

if (isset($_POST['ID']) ) {
  
    $repo->Editar($_POST['DISCIPLINA'],$_POST['ID']);
    
    header('location: ../disciplinas.php');
}else{
  
    header('location: ../disciplinas.php');
}

?>