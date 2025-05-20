<?php
    include "./componentes/header.php";
?>
    <main class=" container  ">

        <h1> Cadastros de Usuário </h1>
        
        
        <form class="  row g-3  " action="form.php" method="get">
            
            <!-- <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="">
            <br>
            <label for="email">Email</label>
            <input type="email" name="login" id="login" value="">
            <br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="" >
            <br> -->
            
            <h2>Exercicio</h2>
            
            
            <h3> 1 - user and age </h3>
            <label for="firstname">Nome</label>
            <input type="text" name="firstname" id="firstname" value="">
            <br>
            <label for="age">idade</label>
            <input type="number" name="age" id="age" value="">
            <br>
            
            <?php
            if(isset($_GET["firstname"])  && isset($_GET["age"])){
                
                
                echo $_GET["firstname"];
                echo " <br> ";
                echo $_GET["age"];
                echo " <br> ";
            }
        ?>

<br>

<h3> 1 - soma</h3>
<label for="n1">1º numero</label>
<input type="nember" name="n1" id="n1" value="">
<br>
<label for="n2">2º numero</label>
<input type="number" name="n2" id="n2" value="">


<?php
        if (empty($_GET["n1"]) and empty($_GET["n2"]) ) {
            ?>      
            <div class="alert alert-danger">
                insira os numeros 
                
            </div>
            
            <?php
        }else {
            $v1 = $_GET["n1"];
            $v2 = $_GET["n2"];
            $soma =    $v1 + $v2;
            
            echo " <br> ";
            ?>
            <div class="alert alert-success">
                
                <?php 
            echo " a soma de $v1 e $v2 = $soma";
            ?>
            </div>
            <br/>
            
            <?php
        }
        ?>

<br>

<h3> 3 - name user</h3>
<label for="nameUs">nome de usuario</label>
<input type="text" name="nameUs" id="nameUs" value="">
<br>
<button type="submit">Enviar</button>

</form>
<!-- 
    <form class="row g-3 " action="form.php" method="post">
        
        <h3> 4 - login </h3>
        <label for="nameLo">Nome</label>
        <input type="text" name="nameLo" id="nameLo" value="">
        <br>
        <label for="senhaLo">senha</label>
        <input type="password" name="senhaLo" id="senhaLo" value="">
        
        <br>
        
        <h3> 5 - produto </h3>
        <label for="num1">primei numero</label>
        <input type="number" name="num1" id="num1" value="">
        <br>
        <label for="num2">segundo numero</label>
        <input type="number" name="num2" id="num2" value="">
        
        <br>
        
        <h3> 6 - menssagem </h3>
        <label for="nameMsg">nome usuario</label>
        <input type="text" name="nameMsg" id="nameMsg" value="">
        <br>
        <label for="msg">menssagem</label>
        
        <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
        
        <br>
        
        <button type="submit">Enviar</button>
    </form> -->
    
    </main>
    
    <?php  
    include "./componentes/footer.php"
?>