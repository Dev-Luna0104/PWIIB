<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a type="button" class="btn btn-outline-dark" href="index.php">Página inicial</a>
    <a type="button" class="btn btn-outline-dark" href="contato.php">Entre em contato</a>
    <h1>lista de produtos</h1>
    <ol>
        <?php
        for($i = 0; $i <= 10; $i++){
            echo "<h1>item $i</h1>";
        }
        ?>
    </ol>
</body>
</html>