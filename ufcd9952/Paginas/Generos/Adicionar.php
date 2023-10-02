<?php 
include "../../config/config.php";
include "../../func/generos.func.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tema = $_POST['tema'];
    

    inserirGener($ligacao, $tema);
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

<label>Tema:</label>
<br>
<input type="text" name="tema" required>
<br>


<input type="submit" value="Adicionar Cliente">
</form>

</body>
</html>