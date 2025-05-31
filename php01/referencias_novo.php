<?php     include "./componentes/header.php"; ?>
    
<div class="row">
    <div class="col-4 offset-4">
    <form action="./refe/referencias_salvar.php" method="post">
            <br>

        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome">

            <br><br>
        <button type="submit" name="salvar_referencia" class="btn btn-primary">
            Salvar referencia
        </button>
    </form>
    </div>
</div>

<?php include "./componentes/footer.php";  ?>
