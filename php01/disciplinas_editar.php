<?php 
    include "./dados/conexao.php";
    require_once "./disci/disciplinasRepository.php";
    include "./componentes/header.php"; 

    if(isset($_GET['id']) && !empty($_GET['id']) ){

        $repo = new disciplinasRepository($conexao);
        $disciplinas = $repo->buscarPorId($_GET['id']);

    }else{
        header('location: disciplinas.php');
    }
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar disciplina</div>
            <div class="card-body">
                <form action="./disci/disciplinas_editar_salvar.php" method="post">
                    <label>ID</label>
                    <input type="text" name="ID"  class="form-constrol" value="<?php echo $disciplinas['ID'] ?>" readonly >
                        <br><br>
                    <label for="disciplina">disciplina</label>
                    <input type="text" id="disciplina" name="DISCIPLINA" class="form-constrol" value="<?php echo $disciplinas['DISCIPLINA'] ?>"  >
                    <br><br>


                    
                    
                    <button type="submit" class="btn btn-outline-primary" >Salvar disciplina</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "./componentes/footer.php" ?>

