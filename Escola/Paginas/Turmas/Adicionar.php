<?php 
include "../../config/config.php";
include "../../funcs/Turmas.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Turmas = $_POST['Turmas'];
    $ano  = $_POST['ano'];
    $id_aluno  = $_POST['id_aluno'];
    $id_professor  = $_POST['id_professor'];
    
    

    inserirTurma($ligacao,$Turmas,$ano,$id_aluno,$id_professor);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo Turma</title>
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
<h1>Inserir novo Turma</h1>

<form method="POST">

<label>Turmas:</label>
<br>
<input type="text" name="Turmas" required>
<br>
<br>

<label>ano:</label>
<br>
<input type="text" name="ano" required>
<br>
<br>

<label>id_aluno:</label>
<br>
<input type="int" name="id_aluno" required>
<br>
<br>

<label>id_professor:</label>
<br>
<input type="int" name="id_professor" required>
<br>
<br>


<input type="submit" value="Adicionar Cliente">
</form>
</div>
</body>
</html>