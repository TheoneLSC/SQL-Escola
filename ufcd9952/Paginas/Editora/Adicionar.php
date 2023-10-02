<?php 
include "../../config/config.php";
include "../../func/editoras.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $nif  = $_POST['nif'];

    inserirEditora($ligacao, $nome, $nif);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir nova editora</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
<h1>Inserir nova Editora</h1>

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
<input type="submit" value="Adicionar Editora">
</form>

</body>
</html>