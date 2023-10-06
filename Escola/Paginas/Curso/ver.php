<?php 
include "../../config/config.php";
include "../../funcs/Curso.funcs.php";
$id = $_GET['id'];
$ligacao = ligarDB();
$Cursos = obterCurso($ligacao,$id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Curso  <?php echo $Cursos["nome"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>

        <h1>Detalhes do Curso <?php echo $Cursos["nome"];?> </h1>
        <p>
            <label> ID: </label><?php echo $Cursos['id'];?> <br>
        </p>
        <p>
            <label> Nome: </label><?php echo $Cursos['nome']; ?><br>
        </p>
        <p>
            <label> Duracao:  </label><?php echo $Cursos['duracao']; ?><br>
        </p>
        <p>
            <label>id_horario: </label><?php echo $Cursos['id_horario']; ?><br>
        </p>
        <p>
            <label>id_Disciplia: </label><?php echo $Cursos ['id_disciplina']; ?>
        </p>
        <p>
            <label>id_Turma: </label><?php echo $Cursos ['id_turma']; ?>
        </p>
</body>
</html>