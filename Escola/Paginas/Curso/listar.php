<?php
include "../../config/config.php";
include "../../funcs/Curso.funcs.php";
$ligacao = ligarDB();
$Cursos = obterCursos($ligacao);
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
    <th>Nome </th> 
    <th>Duração</th>
    <th>id_horario </th>
    <th>id_Disciplia </th>
    <th>id_Turma</th>
    </tr>
    <?php foreach($Cursos as $Curso){ ?>
        <tr>

    <td><?php echo $Curso ["id"]; ?></td>
    <td><?php echo $Curso ["nome"]; ?></td>
    <td><?php echo $Curso ["duracao"]; ?></td>
    <td><?php echo $Curso ["id_horario"]; ?></td>
    <td><?php echo $Curso ["id_disciplina"];?></td>
    <td><?php echo $Curso ["id_turma"];?></td>
    <td>
        <a href="ver.php?id=<?php echo $Curso ['id']; ?>">Ver</a>
        

        </td>
    </tr>

    <?php } ?>
    </table>

    </body>
    </html>