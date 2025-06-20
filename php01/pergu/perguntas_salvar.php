<?php
include "../dados/conexao.php";
require_once "perguntasRepository.php";

$repo = new PerguntaRepository($conexao);

// Verifica se o formulário foi enviado corretamente
if (isset($_POST["salvar_pergunta"])) {
    $pergunta = $_POST['PERGUNTA'] ?? '';
    $id_disciplina = $_POST['id_disciplina'] ?? null;

    // Validação básica
    if (!empty($pergunta) && !empty($id_disciplina)) {
        $repo->Inserir($pergunta, $id_disciplina);
    }

    // Redireciona de qualquer forma para a tela de perguntas
    header('Location: ../perguntas.php');
    exit;
} else {
    header('Location: ../perguntas.php');
    exit;
}
?>
