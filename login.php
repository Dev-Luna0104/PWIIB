<?php
    include "./componentes/header.php";
?>

    <section class=" container bg-primary card my-5 py-5 "  >
        <img src="imagens\logo_de.png" alt="" class=" bg-white p-3 card" >
        <form  class=" container " action="verificar_login.php" method="post">
            <br>
            <p class=" text-white ">Email:</p>
            <input type="text" class="form-control" name="email" />
            <br />
            <p class="text-white">Senha:</p>
            <input type="password" class="form-control" name="senha" />
            <?php 
            if( isset($_GET["erro"]) && !empty($_GET["erro"]) ){
                echo $_GET["erro"];
            }
            ?>
            <br />
            <button class=" form-control btn btn-success" type="submit">
                Logar
            </button>
            
        </form>
    </section>
</main>
<?php  
    include "./componentes/footer.php"
?>