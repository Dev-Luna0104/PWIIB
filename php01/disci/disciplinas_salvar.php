<?php

include "../dados/conexao.php";
require_once "disciplinasRepository.php";
$repo = new disciplinasRepository($conexao);

if (isset($_POST["salvar_disciplinas"])) {
  

    $repo->Inserir($_POST['disciplina']);
    header('location: ../disciplinas.php');
}else{
    header('location: ../disciplinas.php');}

?>