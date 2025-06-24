<?php
include "componentes/header.php";
include "./dados/conexao.php";
require_once "./alter/alternativasRepository.php";

$id = $_GET['id'];
$repo = new AlternativaRepository($conexao);
$alt = $repo->buscarPorId($id);
?>

<div class="container mt-4">
    <h4>Editar Alternativa</h4>
    <form action="./alter/alternativas_editar_salvar.php" method="post">
        <input type="hidden" name="id" value="<?= $alt['ID'] ?>">
        <input type="hidden" name="id_pergunta" value="<?= $alt['ID_PERGUNTA'] ?>">

        <label>Texto da Alternativa:</label>
        <textarea name="texto" class="form-control" required><?= htmlspecialchars($alt['TEXTO']) ?></textarea>
        <br/>

        <label>É a correta?</label>
        <select name="correta" class="form-control" required>
            <option value="1" <?= $alt['CORRETA'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$alt['CORRETA'] ? 'selected' : '' ?>>Não</option>
        </select>
        <br/>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php include "componentes/footer.php"; ?>
