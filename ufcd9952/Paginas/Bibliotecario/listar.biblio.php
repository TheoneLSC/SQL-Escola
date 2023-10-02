<?php 
include "../../config/config.php";
include "../../func/Bibliotecarios.funcs.php";
$ligacao = ligarDB();
$bis = obterBiblios($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php  include "../../Componentes/nav.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Gerir bibliotecarios</h1>

<a href="adicionar.php" >Adicionar bibliotecarios</a>

<table>
<tr>
    
    <th>ID</th>
    <th>Genero</th>
    <th>codBiblio</th>
</tr>

<?php foreach($bis as $bis){ ?>
    <tr>

    <td><?php echo $bis ["id"]; ?></td>
    <td><?php echo $bis ["nome"]; ?></td>
    <td><?php echo $bis ["codBiblio"]; ?></td>
    <td>
        <a href="ver.biblio.php?id=<?php echo $bis ['id']; ?>">Ver</a>
        <a href="Editar.php?id=<?php echo $bis ['id']; ?>">editar</a>
        <a href="apagar.php?id=<?php echo $bis ['id']; ?>">Apagar</a>

        </td>
    </tr>

    <?php } ?>
</table>
    
</body>
</html>