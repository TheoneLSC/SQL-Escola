<?php 
include "../../config/config.php";
include "../../func/Bibliotecarios.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $codBiblio = $_POST['codBiblio'];

    inserirBib($ligacao, $nome, $codBiblio);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo Bibliotecario</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
<h1>Inserir novo Bibliotecario</h1>

<form method="POST">

<label>Nome:</label>
<br>
<input type="text" name="nome" required>
<br>
<br>

<label> codBiblio </label>
<br>
<input type="text" name="codBiblio" required>
<br>

<input type="submit" value="Adicionar Cliente">
</form>

</body>
</html>