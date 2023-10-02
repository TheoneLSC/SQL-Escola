<?php 
include "../../config/config.php";
include "../../func/livros_autores.php";
$ligacao = ligarDB();
$livs = obterliv_autors($ligacao);
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
    <th>id_livros</th>
    <th>id_autores</th>
</tr>

<?php foreach($livs as $liv){ ?>
    <tr>

    <td><?php echo $liv ["id"]; ?></td>
    <td><?php echo $liv ["id_livros"]; ?></td>
    <td><?php echo $liv ["id_autores"]; ?></td>
    <td>
        <a href="ver.livros_autores.php?id=<?php echo $liv ['id']; ?>">Ver</a>
        <a href="editar.php?id=<?php echo $liv ['id']; ?>">editar</a>
        <a href="apagar.php?id=<?php echo $liv ['id']; ?>">Apagar</a>

        </td>
    </tr>

    <?php } ?>
</table>
    
</body>
</html>