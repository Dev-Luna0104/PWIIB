<?php     include "./componentes/header.php"; ?>
    
<div class="row">
    <div class="col-4 offset-4">
    <form action="./disci/disciplinas_salvar.php" method="post">
            <br>

        <label for="disciplina">disciplina</label>
        <input type="text" name="disciplina" class="form-control" id="disciplina" SELECT>

            <br><br>
        <button type="submit" name="salvar_disciplinas" class="btn btn-primary">
            Salvar referencia
        </button>
    </form>
    </div>
</div>

<?php include "./componentes/footer.php";  ?>
