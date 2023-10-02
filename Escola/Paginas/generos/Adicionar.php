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
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
<h1>Inserir novo género</h1>

<form method="POST">

<label>género:</label>
<br>
<input type="text" name="genero" required>
<br>
<br>

<input type="submit" value="Adicionar genero">
</form>

</body>
</html>