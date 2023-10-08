<?php 
include "../../config/config.php";
include "../../funcs/generos.func.php";
$ligacao = ligarDB();
$generos = obterGeneros($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerir Generos</title>
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
<h1>Gerir Generos</h1>

<a href="Adicionar.php" >Adicionar Genero</a>

<table border="1" >
<tr>
    
    <th>ID</th>
    <th>Genero</th>
</tr>

<?php foreach($generos as $genero){ ?>
    <tr>

    <td><?php echo $genero ["id"]; ?></td>
    <td><?php echo $genero ["genero"]; ?></td>
    <td>
        <a href="ver.php?id=<?php echo $genero ['id']; ?>">Ver</a>
        <a href="Editar.php?id=<?php echo $genero ['id']; ?>">editar</a>
        <a href="Apagar.php?id=<?php echo $genero ['id']; ?>">Apagar</a>

        </td>
    </tr>

    <?php } ?>
</table>
</div>
</body>
</html>