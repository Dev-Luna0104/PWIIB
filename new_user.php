<?php     include "./componentes/header.php"; ?>
    
<div class="row">
    <div class="col-4 offset-4">
    <form action="salvar_usuario.php" method="post">
            <br>

        <label for="login">Login</label>
        <input type="text" name="login" class="form-control" id="login">
            <br>
        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha" class="form-control password">
            <br>    
        <input type="checkbox" name="ativo" value="Usuário ativo">
        Usuário ativo
            <br><br>
        <button type="submit" name="salvar_usuario" class="btn btn-primary">
            Salvar usuário
        </button>
    </form>
    </div>
</div>

<?php include "./componentes/footer.php";  ?>
