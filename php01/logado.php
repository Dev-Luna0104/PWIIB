<?php session_start();


if (basename($_SERVER['PHP_SELF']) != 'login.php') 
{
    if (!isset($_SESSION["Nome"]) || empty($_SESSION["Nome"]))
    {
        header("location: login.php");
    }
}



?>