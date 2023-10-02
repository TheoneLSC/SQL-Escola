<?php 
include "../../config/config.php";
include "../../func/generos.func.php";
$ligacao = ligarDB();
$generos = obterGeneros($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>

<h1>Gerir Generos</h1>

<a href="adicionar.php" >Adicionar Genero</a>

<table>
<tr>
    
    <th>ID</th>
    <th>Genero</th>
</tr>

<?php foreach($generos as $genero){ ?>
    <tr>

    <td><?php echo $genero ["id"]; ?></td>
    <td><?php echo $genero ["tema"]; ?></td>
    <td>
        <a href="ver.generos.php?id=<?php echo $genero ['id']; ?>">Ver</a>
        <a href="editar.php?id=<?php echo $genero ['id']; ?>">editar</a>
        <a href="Delete.php?id=<?php echo $genero ['id']; ?>">Apagar</a>

        </td>
    </tr>

    <?php } ?>
</table>
    
</body>
</html>