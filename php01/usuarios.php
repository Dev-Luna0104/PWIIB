<?php 
    include "./componentes/header.php";
    include "./dados/conexao.php";

    //inclui o arquivo da classe Repository do usuario
    require_once './usuarioRepository.php';



    //Cria um objeto do tipo UsuarioRepository.php chamado repo
    //E recebe a conexão do banco de dados
    $repo = new UsuarioRepository($conexao);

    if(isset($_GET['busca']) && !empty($_GET['busca']) ){
        $usuarios = $repo->Pesquisar($_GET['busca']);
    }else{
        //chamei o metado BuscarTodas para puxar
        // todas usuarios do banco de dados
        $usuarios = $repo->buscarTodos();
    }

?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <b>lista de usuários</b>
            </div>
            <div class="card-body">

                <form action="usuarios.php" method="get">
                    <div class="row">

                        <div class="col-4">
                            <a href="new_user.php" class="btn btn-success">
                                Novo usuário
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
                                <th>Login</th>
                                <th>Ativo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                //foreach serve para ler todos os usuarios
                                // vindo do banco em formato de array chave e valor
                                foreach ($usuarios as $item ) {
                                    echo "<tr>
                                            <td>$item[ID]</td>
                                           <td>$item[LOGIN]</td>
                                           <td>$item[ATIVO]</td>
                                           <td>
                                                <a class='btn btn-outline-danger' href='./dados/excluir_usuario.php?id=".$item['ID']."'>
                                                Excluir
                                                </a>

                                                <a class='btn btn-outline-warning' href='./editar_usuario.php?id=".$item['ID']."'>
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