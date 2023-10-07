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
    <title>Gerir Disciplinas</title>
    <style>
        .info {
            border: 1px solid black;
            width: 400px;
            height:600px
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
<h1>Gerir Disciplinas</h1>

<a href="adicionar.php" >Adicionar Disciplina</a>

<table>
<tr>
    
    <th>ID</th>
    <th>Disciplina</th>
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
</div>
</body>
</html>