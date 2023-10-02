<?php 
include "../../config/config.php";
include "../../func/clientes.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $nif  = $_POST['nif'];
    $nrCartaoCliente  = $_POST['nrCartaoCliente'];
    $historico  = $_POST['historico'];

    inserirClient($ligacao, $nome, $nif, $nrCartaoCliente, $historico );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo Cliente</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
<h1>Inserir novo Cliente</h1>

<form method="POST">

<label>Nome:</label>
<br>
<input type="text" name="nome" required>
<br>
<br>
<label>NIF:</label>
<br>
<input type="text" name="nif" required>
<br>

<label> nrCartaoCliente </label>
<br>
<input type="text" name="nrCartaoCliente" required>
<br>

<label> historico </label>
<br>
<input type="text" name="historico" required>
<br>

<input type="submit" value="Adicionar Cliente">
</form>

</body>
</html>