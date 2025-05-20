<?php
    include "./componentes/header.php";
?>


    <div class="container">
        <h1>if</h1>
        <p>
        <h2>Estrutura de decisão</h2>
        A estrutura de decisão é composta por um teste booleano.
        Esse teste verifica uma condição se verdadeiro faça alguma
        ou se falso faça outra.
        <pre>
if($numero == 1)
{
  echo "Aqui significa $numero igual a 1";
}else{
  echo "Aqui significa $numero diferente de 1";
}
</pre>

        <?php
        $numero = 2;
        if ($numero == 1) {
            echo "Aqui significa $numero igual a 1";
        } else {
            echo "Aqui significa $numero diferente de 1";
        }
        ?>
        </p>

        <h2> Estrutura de decisão encadeada</h2>
        <p>
            São varios testes um seguido do outro até algum teste verdadeiro ser encontrado
            Caso não encontre nenhum positivo o else é executado.
            Ao encontrar um teste positivo todos os subsequentes não serão executados.
        <pre>
$nome = "abc";
if($nome == "João"){

}else if($nome == "maria"){

}else if($nome == "Fernando"){
    echo "Achou o nome Fernando e encerra o IF";
}else if($nome == "Pedro"){

}else{
  echo "nenhum nome é igual ao conteudo da variavel";
}
</pre>


        <?php
        $nome = "abc";
        if ($nome == "João") {
        } else if ($nome == "maria") {
        } else if ($nome == "Fernando") {
            echo "Achou o nome Fernando e encerra o IF";
        } else if ($nome == "Pedro") {
        } else {
            echo "nenhum nome é igual ao conteudo da variavel";
        }
        ?>

        <h2>Vários testes em um 1 if </h2>
        Em uma estrutura de decisão unica eu consigo realizar dois ou mais testes.
        Nesse caso eu preciso utilizar os conectivos AND ou OR ( E ou OU ).
        <h3>Conectivo E (And)</h3>
        No exemplo abaixo eu necessito que toda as condições resultem em verdadeiro
        <pre>
  $numero2 = 35;
  if($numero2 > 10 && $numero2 < 50)
  {
      echo "$numero2 está entre 10 e 50";
  }

  //       FALSE            TRUE
  if($numero2 > 36 && $numero2 < 50)
  {
      //Esse código não será executado
  }else{
    echo "$numero2 não está entre 36 e 50";
  }
</pre>

        <?php
        $numero2 = 35;
        //        true   e      true
        if ($numero2 > 10 && $numero2 < 50) {
            echo "$numero2 está entre 10 e 50";
        }

        //       FALSE            TRUE
        if ($numero2 > 36 && $numero2 < 50 && $numero2 == 35) {
            //Esse código não será executado
        } else {
            echo "$numero2 não está entre 36 e 50";
        }

        ?>
    </p>
        <h3>Conectivo OU (or) </h3>
        <p>
            O conectivo ou testa todas as condições e executa o código se apenas uma
            das condições for verdadeira. Caso nenhum condição for verdadeiro o else é
            executado.
                <br />
            <pre>
    $telefone = "14998885214";
    if($telefone == "14998885214" || $telefone == "1688885555")
    {
        echo "Aqui um dos telefone é igual a variavel";
    }
            </pre>
            Quando temos várias condições apenas uma é necessario ao usar o conectivo OU
            representado por dois PIPE (Tecla que fica do lado do Z) ||
        </p>

        <h2>Exercicio</h2>
        <p>
            Crie uma variavel idade preencha com um valor e
            escreva na tela se ela pode ou não entrar em um evento
            considerando as seguintes regras:
            <ul>
                <li>Menor de 18 anos: Não pode entrar.</li>
                <li>Maior ou igual a 18 e menor que 60: Pode entrar.</li>
                <li>Maior ou igual a 60: Entrada gratuita.</li>
            <ul>

            <?php
                $idade = rand(5, 75);
                if ($idade < 18) {
                    echo "<span>Não pode entrar.</span>";
                } else if ($idade >= 18 && $idade < 60) {
                    echo "<span>Pode entrar.</span";
                } else {
                    echo "<span>Entrada gratuita.</span>";
                }
            ?>
        </p>
    </div>

    <?php  
    include "./componentes/footer.php"
?>