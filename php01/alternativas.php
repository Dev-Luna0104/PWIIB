<?php
include "componentes/header.php";
include "./dados/conexao.php";
require_once "./pergu/perguntasRepository.php";
require_once "./alter/alternativasRepository.php";

$repoPergunta = new PerguntaRepository($conexao);
$repoAlt = new AlternativaRepository($conexao);

$idPergunta = $_GET['id'];
$pergunta = $repoPergunta->buscarPorId($idPergunta);
$alternativas = $repoAlt->buscarPorPergunta($idPergunta);
?>

<div class="container mt-3">
    <h4>Pergunta: <?= htmlspecialchars($pergunta['PERGUNTA']) ?></h4>
    <a href="alternativas_nova.php?id=<?= $idPergunta ?>" class="btn btn-success mb-3">Nova Alternativa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Texto</th>
                <th>Correta</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternativas as $alt): ?>
            <tr>
                <td><?= htmlspecialchars($alt['TEXTO']) ?></td>
                <td><?= $alt['CORRETA'] ? 'Sim' : 'Não' ?></td>
                <td>
                    <a href="alternativas_editar.php?id=<?= $alt['ID'] ?>" class="btn btn-warning">Editar</a>

                    <a href="./alter/alternativas_excluir.php?id=<?= $alt['ID'] ?>&id_pergunta=<?= $idPergunta ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include "componentes/footer.php"; ?>
