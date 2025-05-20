<?php
    include "./componentes/header.php";
?>
<h1>For</h1>

<p>
    for é estrutura de repetição. Existem 3 configurações para a estrutura de reperição funcionar:
    
    <ol>
        <li>Variável de controle</li>
        <li>Condição de finalização</li>
        <li>Incremento de variavel de controle</li>
    </ol>
        <pre>
            for($i = 0; $i < 10;$i++){
                echo "indice $i  ";
            }
        </pre>
    <?php
        for($i = 0; $i <= 10000;$i++){    
            $s = $i * 2;
            echo " $s -- ";
        }
    ?>
</p>

<?php  
    include "./componentes/footer.php"
?>