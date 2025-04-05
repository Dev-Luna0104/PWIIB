<?php
    include "./nav.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>





    </style>
</head>
<body>
<main >

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
            <button class=" bg-{#fd7e14} form-control" type="submit">
                Logar
            </button>
            
        </form>
    </section>
</main>
<script src="bootstrap.bundle.min.js" ></script>

    
</body>
</html>