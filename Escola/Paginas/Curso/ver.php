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
</div>
</body>
</html>