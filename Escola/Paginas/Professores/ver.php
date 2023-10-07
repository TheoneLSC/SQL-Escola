<?php 
include "../../config/config.php";
include "../../funcs/professores.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$genero = obterProfesor($ligacao,$id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Professor <?php echo $genero["professor"]?></title>
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
        <h1>Detalhes do Professor <?php echo $genero["nome"];?> </h1>
        <p>
            <label> ID: </label><?php echo $genero['id'];?> <br>
        </p>
        <p>
            <label> Nome: </label><?php echo $genero['nome']; ?><br>
        </p>
        <p>
            <label> Data de nascimento: </label><?php echo $genero['DataN']; ?><br>
        </p>
</div>
</body>
</html>