<?php   
    include "componentes/header.php"; 
    include "./dados/conexao.php";
?>
<div class="row">
    <div class="col-6 offset-3">
        <div class="card mt-3">
            <div class="card-header">
                Cadastro de perguntas
            </div>
            <div class="card-body">
                <form action="pergunta_salvar.php" method="post">
                        
                    <label>Pergunta</label>
                    <textarea name="PERGUNTA" class="form-control"></textarea>
                    <br/>
                    <label>Disciplina</label>
                    <select name="id_disciplina" class="form-control" >
                        <?php
                            require_once './disci/disciplinasRepository.php';
                            $repo = new disciplinasRepository($conexao);

                            foreach ($repo->buscarTodos() as $item  ) {
                                echo "<option value='$item[ID]'> $item[DISCIPLINA] </option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button name="salvar_pergunta" type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </form>
                </div>
        </div>
    </div>
</div>

<?php include "./componentes/footer.php"; ?>

