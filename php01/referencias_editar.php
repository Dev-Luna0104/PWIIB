<?php 
    include "./dados/conexao.php";
    require_once "./refe/referenciasRepository.php";
    include "./componentes/header.php"; 

    if(isset($_GET['id']) && !empty($_GET['id']) ){

        $repo = new referenciasRepository($conexao);
        $referencias = $repo->buscarPorId($_GET['id']);

    }else{
        header('location: referencias.php');
    }
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar referencia</div>
            <div class="card-body">
                <form action="./refe/referencias_editar_salvar.php" method="post">
                    <label>ID</label>
                    <input type="text" name="ID"  class="form-constrol" value="<?php echo $referencias['ID'] ?>" readonly >
                        <br><br>
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="NOME" class="form-constrol" value="<?php echo $referencias['NOME'] ?>"  >
                    <br><br>


                    
                    
                    <button type="submit" class="btn btn-outline-primary" >Salvar Usuário</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "./componentes/footer.php" ?>

