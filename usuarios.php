<?php
    include "./componentes/header.php";
    include "./dados/conexao.php";

    require_once 'usuarioRepository.php';

    $repo = new UsuarioRepository($conexao);

    $usuarios = $repo->buscarTodos();

    foreach ($usuarios as $item ) {
        echo "<h1>Login: " .$item['LOGIN'].
            "   Senha: " .$item['SENHA'].
            "   Ativo: " . $item['ATIVO'],
            "</h1><br>";
        
    }

    include "./componentes/footer.php";
?>