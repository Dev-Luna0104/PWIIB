<?php include "./componentes/header.php"; ?>

<div class="container">

<div class="row">
    <div class="col-md-6 offset-md-3">

        <div class="card mt-3 ">

            <form class="card-body cardbody-color rounded-3 p-lg-5" method="post" action="./dados/verificar_login.php">

                <div class="text-center">
                    <img src="/pwiib/imagens/login.png" class="img-fluid my-4 bg-white p-3 rounded-3" alt="profile">
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" name="Login" id="Login" required aria-describedby="Login" placeholder="Digite seu login">
                </div>
                <div class="mb-3 mt-3">
                    <input type="password" class="form-control" id="Senha" name="Senha" required placeholder="Digite sua senha">
                </div>
                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" style="background-color:#F7A81B">Entrar</button></div>
                <input type="hidden" name="ReturnUrl" value="/" />
                <div id="mensagem" class="form-text text-center mb-5 text-dark">
                    <?php
                        if(isset($_GET["erro"]) && !empty($_GET["erro"]))
                        {
                            echo "<div class='alert alert-danger'>";
                            echo $_GET["erro"];
                            echo "</div>";
                        }
                    ?>
                </div>
            </form>
        </div>

    </div>
</div>
</div>

<?php include "./componentes/footer.php" ?>