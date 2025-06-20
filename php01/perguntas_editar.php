<?php 
    include "./dados/conexao.php";
    require_once "./pergu/perguntasRepository.php";
    include "./componentes/header.php"; 

    if(isset($_GET['id']) && !empty($_GET['id']) ){

        $repo = new PerguntaRepository($conexao);
        $perguntas = $repo->buscarPorId($_GET['id']);

    }else{
        header('location: referencias.php');
    }
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar referencia</div>
            <div class="card-body">
                <form action="./pergu/perguntas_editar_salvar.php" method="post">
                    <label>ID</label>
                    <input type="text" name="ID"  class="form-constrol" value="<?php echo $perguntas['ID'] ?>" readonly >
                        <br><br>
                    <label for="pergunta">Pergunta</label>
                    <input type="text" id="pergunta" name="PERGUNTA" class="form-constrol" value="<?php echo $perguntas['PERGUNTA'] ?>"  >
                    <br><br>


                    
                    
                    <button type="submit" class="btn btn-outline-primary" >Salvar referencia</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "./componentes/footer.php" ?>

