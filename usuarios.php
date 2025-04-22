<?php
    include "./componentes/header.php";
    include "./dados/conexao.php";

    //inclui o arquivo da classe Repository do usuario
    require_once './usuarioRepository.php';

    //Cria um objeto do tipo UsuarioRepository.php chamado repo
    //E recebe a conexão do banco de dados
    $repo = new UsuarioRepository($conexao);

    //chamei o metado BuscarTodas para puxar
    // todas usuarios do banco de dados
    $usuarios = $repo->buscarTodos();

?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <b>lista de usuários</b>
            </div>
            <div class="card-header">
                <div class="row">

                    <div class="col-4">
                        <a href="" class="btn btn-success">
                            Novo usuário
                        </a>
                    </div>

                    <div class="col-4">
                        <input  name="busca" class="form-control">
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">
                            Lista de usuárioas
                        </button>
                    </div>

                </div>
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