<?php
include "../dados/conexao.php";
require_once "./alternativasRepository.php";

$repo = new AlternativaRepository($conexao);

$repo->Inserir($_POST['id_pergunta'], $_POST['texto'], $_POST['correta']);
$correta = intval($_POST['correta']); // transforma "0" ou "1" em número

header("Location: alternativas_listar.php?id=" . $_POST['id_pergunta']);

