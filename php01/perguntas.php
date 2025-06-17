<?php
    include "componentes/header.php"; 
    include "dados/conexao.php";
    require_once './disci/disciplinasRepository.php';
    require_once './refe/referenciasRepository.php';

    //Crio um objeto do tipo DisciplinaRepository chamado repo
    //E recebe a conexão como parametro
    $repoDisciplina = new disciplinasRepository($conexao);
    $repo = new referenciasRepository($conexao);

    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $obj = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        //Chamei o metodo BuscarTodos para puxar 
        // todos usuarios do banco de dados
        $obj = $repo->buscarTodos();
    }
    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de Perguntas</b>
            </div>
            <div class="card-body">
             <form action="perguntas.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="pergunta_novo.php" class="btn btn-success">
                                Novo
                            </a>
                        </div>
                        <div class="col-4">
                            <input name="busca" class="form-control" />
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
                            <th>Pergunta</th>
                            <th>Disciplina</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           
                            foreach ($obj as $row) {
                                echo
                                   "<tr>
                                        <td>".$row['ID']."</td>
                                        <td>".$row['PERGUNTA']."</td>
                                        <td>".$row['ID_DISCIPLINA']."</td>
                                        <td>
                                         <a class='btn btn-primary'
                                                 href='pergunta_add_alternativa.php?id=".$row['ID']."'>Alternativas</a>
                                            <a class='btn btn-danger'
                                                 href='pergunta_excluir.php?id=".$row['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='pergunta_editar.php?id=".$row['ID']."'>Editar</a>
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

    include "./componentes/footer.php"; 
?>