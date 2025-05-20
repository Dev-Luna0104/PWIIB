<?php

    // echo $_GET ["name"];
    // echo "<br>";
    // echo $_GET ["login"];
    // echo "<br>";
    // echo $_GET ["password"];

    // echo $_GET ["name"];
    // echo "<br>";
    // echo $_GET ["login"];
    // echo "<br>";
    // echo $_GET ["senha"];

    // exercicioc 1 ==========================================================

    echo $_GET["firstname"];
    echo " <br> ";
    echo $_GET["age"];
    echo " <br> ";


    // exercicioc 2 ==========================================================

    $v1 = $_GET["n1"];
    $v2 = $_GET["n2"];
    $soma =    $v1 + $v2;
    echo " a soma de $v1 e $v2 = $soma";
    echo " <br> ";

        // exercicioc 3 ==========================================================

    $nU = $_GET['nameUs'] ;
    echo " Olá, $nU " ;
    echo " <br> ";

    // exercicioc 4 ==========================================================

    $nameL = $_POST['nameLo'];
    $senhal = $_POST['senhaLo'];
    echo ($nameL != false) ? $nameL : "nome não valido." ;
    echo " <br> ";
    echo ($senhal != false) ? $senhal : "senha invalida." ;

    // exercicioc 5 ==========================================================

    $num1 = $_GET['num1'];
    $num2 = $_GET["num2"];
    $produto = $num1 * $num2;
    echo "$produto";

    // exercicioc 6 ==========================================================

    echo $_POST["nameMsg"];
    echo " <br> ";
    echo $_POST["msg"];


?>


