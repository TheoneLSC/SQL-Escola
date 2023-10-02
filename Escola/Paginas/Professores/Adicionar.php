<?php 
include "../../config/config.php";
include "../../funcs/professores.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $DataN  = $_POST['DataN'];
    

    inserirProf($ligacao,$nome,$DataN);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo Professor</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
<h1>Inserir novo Professor</h1>

<form method="POST">

<label>Nome:</label>
<br>
<input type="text" name="nome" required>
<br>
<br>


<label> Data Nascimento </label>
<br>
<input type="text" name="DataN" required>
<br>

<input type="submit" value="Adicionar Cliente">
</form>

</body>
</html>