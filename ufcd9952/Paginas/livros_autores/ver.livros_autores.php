<?php 
include "../../config/config.php";
include "../../func/livros_autores.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$liv_7 = obterLivautor($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes dos livros do autor<?php echo $liv_7["id"]?></title>
</head>
<body>
    <?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes dos livros do autor <?php echo $liv_7["id"];?> </h1>
        <p>
            <label> ID: </label><?php echo $liv_7['id'];?> <br>
        </p>
        <p>
            <label> id_livros: </label><?php echo $liv_7['id_livros']; ?><br>
        </p>
        <p>
            <label> id_autores: </label><?php echo $liv_7['id_autores']; ?><br>
        </p>
</body>
</html>