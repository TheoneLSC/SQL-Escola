<?php 
include "../../config/config.php";
include "../../func/generos.func.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$genero = obterGenero($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Genero literario <?php echo $genero["tema"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes de Genero literario <?php echo $genero["tema"];?> </h1>
        <p>
            <label> ID: </label><?php echo $genero['id'];?> <br>
        </p>
        <p>
            <label> Tema: </label><?php echo $genero['tema']; ?><br>
        </p>
</body>
</html>