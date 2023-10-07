<?php 
include "../../config/config.php";
include "../../funcs/Curso.funcs.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$Curso = obterCurso($ligacao, $id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id                = $_POST ['id'];
    $nome              = $_POST ['nome'];
    $duracao           = $_POST ['duracao'];
    $id_horario        = $_POST ['id_horario'];
    $id_disciplina     = $_POST ['id_disciplina'];
    $id_turma          = $_POST ['id_turma'];
   
   
   
    
    editarcurso($ligacao,$nome,$duracao,$id_horario,$id_disciplina, $id_turma, $id);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $Curso ['id'];?></title>
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
    <h1>Detalhes de  <?php echo $Curso['id'];?></h1>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $Curso['id']; ?>">
            <label>Nome:</label>
            <br>
            <input type="text" name="nome" value="<?php echo $Curso['nome']; ?>" required>
            <br>
            <br>
            <label>Duracao:</label>
            <br>
            <input type="text" name="duracao" value="<?php echo $Curso['duracao']; ?>" required>
            <br>
            <br>
            <label>Id do horario:</label>
            <br>
            <input type="int" name="id_horario" value="<?php echo $Curso['id_horario']; ?>" required>
            <br>
            <br>
            <label>Id do disciplina:</label>
            <br>
            <input type="int" name="id_disciplina" value="<?php echo $Curso['id_disciplina']; ?>" required>
            <br>
            <br>
            <label>Id do turma:</label>
            <br>
            <input type="int" name="id_turma" value="<?php echo $Curso['id_turma']; ?>" required>
            <br>
            <br>
         
           

            <input type="submit" value="Editar Professores">
        </form>
    </div>
    </body>
</html>