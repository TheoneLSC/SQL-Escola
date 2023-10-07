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
    <title>Detalhes do Genero  <?php echo $genero["genero"]?></title>
    <style>
        .info {
            border: 1px solid black;
            width: 400px;
            padding: 10px;
            background-color: crimson;
            color: black;
            margin: auto;
            margin-top: 10%;
        }
    </style>
</head>
<body
    data-spy="scroll"
    data-target="#main-nav"
    id="home"
    class="text-white bg-dark">
<?php  include "../../Componentes/nav.php"?>
<div class="info">
        <h1>Detalhes de Genero  <?php echo $genero["genero"];?> </h1>
        <p>
            <label> ID: </label><?php echo $genero['id'];?> <br>
        </p>
        <p>
            <label> Genero: </label><?php echo $genero['genero']; ?><br>
        </p>
</div>
</body>
</html>