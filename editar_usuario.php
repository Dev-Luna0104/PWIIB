<?php 
    include "./dados/conexao.php";
    require_once "UsuarioRepository.php";
    include "./componentes/header.php"; 

    if(isset($_GET['id']) && !empty($_GET['id']) ){

        $repo = new UsuarioRepository($conexao);
        $usuario = $repo->buscarPorId($_GET['id']);

    }else{
        header('location: usuarios.php');
    }
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar usuário</div>
            <div class="card-body">
                <form action="./dados/salvar_edicao_usuario.php" method="post">
                    <label>ID</label>
                    <input type="text" name="ID"  class="form-constrol" value="<?php echo $usuario['ID'] ?>" readonly >
                        <br><br>
                    <label for="login">Login</label>
                    <input type="text" id="login" name="LOGIN" class="form-constrol" value="<?php echo $usuario['LOGIN'] ?>"  >
                        <br><br>
                    <label for="ativo">Ativo</label>
                    <select name="ATIVO" id="ativo" class="form-control">

                        <?php 
                            if ($usuario["ATIVO"]) {
                                ?>
                                    <option value="1" selected>Ativado</option>
                                    <option value="0">Desativado</option>    
                                <?php 
                                
                            }else{
                                ?>
                                    <option value="1">Ativado</option>
                                    <option value="0" selected>Desativado</option>    
                                <?php 
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-outline-primary" >Salvar Usuário</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "./componentes/footer.php" ?>

