<?php
include "componentes/header.php";
include "dados/conexao.php";
require_once "./alter/alternativasRepository.php";

$idPergunta = $_GET['id'];
?>

<div class="container mt-4">
    <h4>Adicionar Alternativa - Pergunta #<?= $idPergunta ?></h4>
    <form action="./alter/alternativas_salvar.php" method="post">
        <input type="hidden" name="id_pergunta" value="<?= $idPergunta ?>">
        <div class="mb-3">
            <label>Texto da Alternativa:</label>
            <input type="text" name="texto" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>É correta?</label>
            <select name="correta" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <button class="btn btn-success">Salvar</button>
        <a href="alternativas_listar.php?id=<?= $idPergunta ?>" class="btn btn-secondary">Voltar</a>
    </form>
</div>

<?php include "componentes/footer.php"; ?>
