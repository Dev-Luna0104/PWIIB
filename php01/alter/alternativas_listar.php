<?php
include "componentes/header.php";
include "dados/conexao.php";
require_once "./alternativasRepository.php";

$idPergunta = $_GET['id'];
$repo = new AlternativaRepository($conexao);
$alternativas = $repo->listarPorPergunta($idPergunta);
?>

<div class="container mt-4">
    <h4>Alternativas da Pergunta #<?= $idPergunta ?></h4>
    <a href="pergunta_add_alternativa.php?id=<?= $idPergunta ?>" class="btn btn-success mb-3">Nova Alternativa</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Texto</th>
                <th>Correta</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternativas as $alt): ?>
                <tr>
                    <td><?= $alt['ID'] ?></td>
                    <td><?= $alt['TEXTO'] ?></td>
                    <td><?= $alt['CORRETA'] ? 'Sim' : 'Não' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="perguntas.php" class="btn btn-secondary">Voltar</a>
</div>

<?php include "componentes/footer.php"; ?>
