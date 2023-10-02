<?php 
include "../../config/config.php";
include "../../funcs/Horarios.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $turno = $_POST['turno'];
    
    

    inseriHorario($ligacao,$turno);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo Truno</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
<h1>Inserir novo Turno</h1>

<form method="POST">

<label>Turno:</label>
<br>
<input type="text" name="turno" required>
<br>
<br>

<input type="submit" value="Adicionar Cliente">
</form>

</body>
</html>