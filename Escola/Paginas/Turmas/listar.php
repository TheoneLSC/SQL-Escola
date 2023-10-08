<?php
include "../../config/config.php";
include "../../funcs/Turmas.funcs.php";
$ligacao = ligarDB();
$Turmas = obterTurmas($ligacao);
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Horarios</title>
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
    <?php include "../../Componentes/nav.php"?>  
<div class="info">
    <h1>Gerir Turmas</h1>
    <a href="adicionar.php">Adicionar Turma</a>
    <table border="1" >
    <tr>
    <th>id</th>
    <th>Turma </th> 
    <th>Ano </th>
    <th>id_aluno </th>
    <th>id_professor </th>
    </tr>
    <?php foreach($Turmas as $turma){ ?>
        <tr>

    <td><?php echo $turma ["id"]; ?></td>
    <td><?php echo $turma ["Turmas"]; ?></td>
    <td><?php echo $turma ["ano"]; ?></td>
    <td><?php echo $turma ["id_aluno"]; ?></td>
    <td><?php echo $turma ["id_professor"];?></td>
    <td>
        <a href="ver.php?id=<?php echo $turma ['id']; ?>">Ver</a>
        <a href="Apagar.php?id=<?php echo $turma ['id'];?>">Apagar</a> <br>
        <a href="Editar.php?id=<?php echo $turma ['id'];?>">Editar</a>

        </td>
    </tr>

    <?php } ?>
    </table>
</div>
    </body>
    </html>