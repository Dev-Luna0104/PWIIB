<?php
<?php
include "./componentes/header.php";
?>

<h1>Array</h1>
<p>
São variaveis que podem guardar uma lista de valores 
identificados por indice ou chave.
</p>
<pre>
  $frutas = ["banana", "Maçã" , "Abacaxi", "mamão", 10, true, array(), [] ];
  //ou 
  $frutas = array("banana", "Maçã" , "Abacaxi", "mamão");
</pre>

    <?php
        // $frutas = ["banana", "Maça", "Abacaxi"];
        // // echo " <br>$frutas[1] ";

        // for($i = 0; $i < count($frutas);$i++){
        //     echo " <br>$frutas[$i] - $i ";
        // }

        // echo "<br>";

        // array_push($frutas, "laranja");
        // for($i = 0; $i < count($frutas);$i++){
        //     echo " <br>$frutas[$i] - $i ";
        // }  


        // echo "<br>";

        // array_push($frutas, rand(1,75));
        // for($i = 0; $i < count($frutas);$i++){
        //     $ale = rand(1,5);
        //     echo " <br>$frutas[$ale] - $ale ";
        // }  







        

        $B = [];
        $I = [];
        $N = [];
        $G = [];
        $O = [];

        for($i = 0; $i < 5;$i++){
            do{
                $B[$i] = rand(1,15) ;
            }while($B[$i] != $B[$i]);
        }

        for($i = 0; $i < 5;$i++){
            $I[$i] = rand(16,30) ;
        }

        for($i = 0; $i < 5;$i++){
            $N[$i] = rand(31,45) ;
        }

        for($i = 0; $i < 5;$i++){
            $G[$i] = rand(46,60) ;
        }

        for($i = 0; $i < 5;$i++){
            $O[$i] = rand(61,75) ;
        }
    
    ?>

    <table class="table" border="5">
        <tr>
            <td>B</td>
            <td>I</td>
            <td>N</td>
            <td>G</td>
            <td>O</td>
        </tr>
        <?php
            for($i = 0; $i < 5;$i++){
                echo"<tr>";
                
                echo"<td> $B[$i] </td>";
                echo"<td> $I[$i] </td>";
                echo"<td> $N[$i] </td>";
                echo"<td> $G[$i] </td>";
                echo"<td> $O[$i] </td>";
                

                echo"<tr>";
            }
        ?>

    </table>

    <h1>sorteio</h1>

    <?php
        $sorteio = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
   

        for ($i = 0;$i < 15; $i++){
            echo " <h2>Rodada ".($i+1)."número sorteado é: $sorteio[$i]</h2> ";
        };
    ?>

    <?php  
    include "./componentes/footer.php"
?>