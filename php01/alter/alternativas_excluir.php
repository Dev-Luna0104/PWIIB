<?php
include "../dados/conexao.php";
require_once "./alternativasRepository.php";

$repo = new AlternativaRepository($conexao);

$id = $_GET['id'];
$idPergunta = $_GET['id_pergunta'];

$repo->excluir($id);

header("Location: ../alternativas.php?id=" . $idPergunta);
