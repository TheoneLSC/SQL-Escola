<?php 
include "../../config/config.php";
include "../../funcs/generos.func.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$genero = obterGenero($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Genero literario <?php echo $genero["genero"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes de Genero literario <?php echo $genero["genero"];?> </h1>
        <p>
            <label> ID: </label><?php echo $genero['id'];?> <br>
        </p>
        <p>
            <label> Tema: </label><?php echo $genero['genero']; ?><br>
        </p>
</body>
</html>