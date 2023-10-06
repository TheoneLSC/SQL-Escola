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
    <title>Document</title>
</head>
<body>
    <?php include "../../Componentes/nav.php"?>  
    <h1>Gerir Turmas</h1>
    <a href="adicionar.php">Adicionar Turma</a>
    <table>
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
       

        </td>
    </tr>

    <?php } ?>
    </table>

    </body>
    </html>