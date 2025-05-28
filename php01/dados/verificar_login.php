<?php  session_start();
if(   isset($_POST["Login"]) && empty($_POST["Login"]) == false )
{
    echo "o Login é:".$_POST["Login"];
}


if(   isset($_POST["Senha"]) && empty($_POST["Senha"]) == false )
{
    echo "<br>a Senha é:".$_POST["Senha"];
}
include "conexao.php";
require_once "../UsuarioRepository.php";

$repo = new UsuarioRepository($conexao);

$usuarioLogado = $repo->verificarLogin($_POST["Login"], $_POST["Senha"]);

if($usuarioLogado != null)
{
    $_SESSION["Nome"] = $usuarioLogado["LOGIN"];
    $_SESSION["Id"] = $usuarioLogado["ID"];
    header("location: ../index.php");
}
else
{
    header("location: ../login.php?erro=Usuario e/ou senha inválido");
}

?>
<h1>Verificando login</h1>