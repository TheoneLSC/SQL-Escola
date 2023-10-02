<?php 
include "../../config/config.php";
include "../../funcs/disciplinas.php";
$ligacao = ligarDB();
$disciplinas = obterDisciplinas($ligacao);
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

<?php foreach($disciplinas as $disciplina){ ?>
    <tr>

    <td><?php echo $disciplina ["id"]; ?></td>
    <td><?php echo $disciplina ["disciplina"]; ?></td>
    <td>
        <a href="ver.php?id=<?php echo $disciplina ['id']; ?>">Ver</a>
        <a href="Editar.php?id=<?php echo $disciplina ['id']; ?>">editar</a>
        <a href="Apagar.php?id=<?php echo $disciplina ['id']; ?>">Apagar</a>

        </td>
    </tr>

    <?php } ?>
</table>
    
</body>
</html>