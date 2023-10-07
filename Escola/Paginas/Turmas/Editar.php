<?php 
include "../../config/config.php";
include "../../funcs/Turmas.funcs.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$Turma = obterTurma($ligacao, $id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id           = $_POST ['id'];
    $Turmas         = $_POST ['Turmas'];
    $ano   = $_POST ['ano'];
    $id_aluno   = $_POST ['id_aluno'];
    $id_professor   = $_POST ['id_professor'];
   
   
    
    EditarTurma($ligacao,$Turmas,$ano,$id_aluno,$id_professor,$id);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $Turma ['id'];?></title>
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
    <h1>Detalhes de  <?php echo $Turma['id'];?></h1>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $Turma['id']; ?>">
            <label>Turma:</label>
            <br>
            <input type="text" name="Turmas" value="<?php echo $Turma['Turmas']; ?>" required>
            <br>
            <br>
            <label>Ano:</label>
            <br>
            <input type="text" name="ano" value="<?php echo $Turma['ano']; ?>" required>
            <br>
            <br>
            <label>Id do aluno:</label>
            <br>
            <input type="int" name="id_aluno" value="<?php echo $Turma['id_aluno']; ?>" required>
            <br>
            <br>
            <label>Id do professor:</label>
            <br>
            <input type="int" name="id_professor" value="<?php echo $Turma['id_professor']; ?>" required>
            <br>
            <br>
           

            <input type="submit" value="Editar Professores">
        </form>
    </div>
    </body>
</html>