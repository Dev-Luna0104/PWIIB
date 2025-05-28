<?php include "./logado.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="./componentes/bootstrap.min.css" rel="stylesheet">
    <style>
      li{
        list-style: none;
      }

    </style>
</head>
<body style="overflow-x:hidden">
<nav class="navbar bg-dark border-bottom border-body">
  <div class="container-fluid px-3 ">
    <a class="navbar-brand" href="#">
      <img src="./imagens/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
    </a>
    <ul style="display:flex; gap:15px;" >
      <li class="nav-item dropdown text-light">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          PhP
        </a>
        
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="variavel.php">Variável</a></li>
          <li><a class="dropdown-item" href="if.php">If</a></li>
          <li><a class="dropdown-item" href="while.php">While</a></li>
          <li><a class="dropdown-item" href="for.php">For</a></li>
          <li><a class="dropdown-item" href="switch.php">Switch</a></li>
          <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
          <li><a class="dropdown-item" href="form.php">Form</a></li>
          <li><a class="dropdown-item" href="login.php">Login</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown text-light">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Usuários
        </a>
        
        <ul class="dropdown-menu">
          <li><a href="./disciplinas.php" class="dropdown-item">Disciplinas</a></li>
          <li><a href="./referencias.php" class="dropdown-item">Referencias</a></li>
        </ul>
      </li>
      <?php
      if (basename($_SERVER['PHP_SELF']) != 'login.php') {
        ?>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item text-white">
                    Bem vindo <?php echo $_SESSION["Nome"]; ?> <a href="logoff.php"> Faça o logoff aqui </a>
                </li>
        </ul>

        <?php
      }
?>
      <li class="nav-item">
        <a class="nav-link text-light" href="./dados/instalar.php" > 
          Instalar o banco 
        </a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">


  
