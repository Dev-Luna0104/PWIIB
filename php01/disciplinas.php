

<?php 
    include "./componentes/header.php";
    include "./dados/conexao.php";

    //inclui o arquivo da classe Repository do usuario
    require_once './disci/disciplinasRepository.php';



    //Cria um objeto do tipo UsuarioRepository.php chamado repo
    //E recebe a conexão do banco de dados
    $repo = new disciplinasRepository($conexao);

    if(isset($_GET['busca']) && !empty($_GET['busca']) ){
        $disciplinas = $repo->Pesquisar($_GET['busca']);
    }else{
        //chamei o metado BuscarTodas para puxar
        // todas usuarios do banco de dados
        $disciplinas = $repo->buscarTodos();
    }

?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <b>Disciplinas</b>
            </div>
            <div class="card-body">

                <form action="referencias.php" method="get">
                    <div class="row">

                        <div class="col-4">
                            <a href="./disciplinas_novo.php" class="btn btn-success">
                                Nova disciplinas
                            </a>
                        </div>

                        <div class="col-4">
                            <input  name="busca" class="form-control">
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>

                    </div>
                </form>
                <div class="row">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>DISCIPLINA</th>
                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                //foreach serve para ler todos os usuarios
                                // vindo do banco em formato de array chave e valor
                                foreach ($disciplinas as $item ) {
                                    echo "<tr>
                                            <td>$item[ID]</td>
                                           <td>$item[DISCIPLINA]</td>
                                           
                                           <td>
                                                <a class='btn btn-outline-danger' href='./disci/disciplinas_excluir.php?id=".$item['ID']."'>
                                                Excluir
                                                </a>

                                                <a class='btn btn-outline-warning' href='./disciplinas_editar.php?id=".$item['ID']."'>
                                                    Editar
                                                </a>
                                           </td>
                                        </tr>";
                                    
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  include "./componentes/footer.php"
?>


