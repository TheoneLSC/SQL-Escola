<?php 
include "../../config/config.php";
include "../../func/autores.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $nif  = $_POST['nif'];
    $nrTelefone  = $_POST['nrTelefone'];
    $email  = $_POST['email'];

    inserirAutor($ligacao, $nome, $nrTelefone, $email);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo Autor</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
<h1>Inserir novo Autor</h1>

<form method="POST">

<label>Nome:</label>
<br>
<input type="text" name="nome" required>
<br>
<br>


<label> nrTelefone </label>
<br>
<input type="text" name="nrTelefone" required>
<br>

<label> Email </label>
<br>
<input type="text" name="email" required>
<br>

<input type="submit" value="Adicionar Cliente">
</form>

</body>
</html>