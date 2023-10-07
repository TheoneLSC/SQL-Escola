<?php 
include "../../config/config.php";
include "../../funcs/generos.func.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $genero = $_POST['genero'];

    

    inseriGenero($ligacao,$genero);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo género</title>
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
<h1>Inserir novo género</h1>

<form method="POST">

<label>género:</label>
<br>
<input type="text" name="genero" required>
<br>
<br>

<input type="submit" value="Adicionar genero">
</form>
</div>
</body>
</html>