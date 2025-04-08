<?php
    include "./componentes/header.php";
?>
 <h2>for</h2>

<p>
    for é estrutura de repetição. Existem 3 configurações para a estrutura de reperição funcionar:
    
    <ol>
        <li>Variável de controle</li>
        <li>Condição de finalização</li>
        <li>Incremento de variavel de controle</li>
    </ol>
        <pre>
        $i = 0;
        while(  $i <1000){    
            $s = $i * 2;
            echo " $s - indice $i - ";
            $i++;
        }
        </pre>
    <?php
    $i = 0;
        while(  $i <10){    
            $s = $i * 2;
            echo " $s - indice $i - ";
            $i++;
        }
    ?>
</p>

 <h2>
     do while
 </h2>



<pre>
    $i = 0;
    do{
        echo "do while com indice $i ";
        $i++;
    }while($i < 10)    
</pre>

 <?php
    $i = 0;
    do{
        echo "do while com indice $i <br>";
        $i++;
    }while($i < 10)
 ?>

<?php  
    include "./componentes/footer.php"
?>