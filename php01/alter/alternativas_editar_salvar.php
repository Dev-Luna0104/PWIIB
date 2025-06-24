<?php
include "../dados/conexao.php";
require_once "./alternativasRepository.php";

$repo = new AlternativaRepository($conexao);

$id = $_POST['id'];
$idPergunta = $_POST['id_pergunta'];
$texto = $_POST['texto'];
$correta = $_POST['correta'] == "1" ? 1 : 0;

$repo->editar($id, $texto, $correta);

header("Location: ../alternativas.php?id=" . $idPergunta);
