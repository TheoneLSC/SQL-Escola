<?php 
include "../../config/config.php";
include "../../funcs/disciplinas.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $disciplina = $_POST['disciplina'];

    

    inserirDisciplina($ligacao,$disciplina);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir nova disciplina</title>
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
<h1>Inserir nova disciplina</h1>

<form method="POST">

<label>Disciplina:</label>
<br>
<input type="text" name="disciplina" required>
<br>
<br>

<input type="submit" value="Adicionar género">
</form>
</div>
</body>
</html>