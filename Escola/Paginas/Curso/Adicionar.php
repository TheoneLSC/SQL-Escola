<?php 
include "../../config/config.php";
include "../../funcs/Curso.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome  = $_POST['nome'];
    $duracao  = $_POST['duracao'];
    $id_horario  = $_POST['id_horario'];
    $id_disciplina  = $_POST['id_disciplina'];
    $id_turma  = $_POST['id_turma'];
    
    

    inserircurso($ligacao ,$nome ,$duracao ,$id_horario ,$id_disciplina ,$id_turma);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo Curso</title>
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
<h1>Inserir novo Curso</h1>

<form method="POST">

<label>Nome:</label>
<br>
<input type="text" name="nome" required>
<br>
<br>

<label>duracao:</label>
<br>
<input type="text" name="duracao" required>
<br>
<br>

<label>id horario:</label>
<br>
<input type="int" name="id_horario" required >
<br>
<br>

<label>id disciplina:</label>
<br>
<input type="int" name="id_disciplina" required>
<br>
<br>

<label>id turma:</label>
<br>
<input type="int" name="id_turma" required>
<br>
<br>



<input type="submit" value="Adicionar Cliente">
</form>
</div>
</body>
</html>