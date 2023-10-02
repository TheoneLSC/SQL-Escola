<?php 
include "../../config/config.php";
include "../../func/autores.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$autor = obterAutor($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Genero literario </title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes de Autor </h1>
        <p>
            <label> ID: </label><?php echo $autor['id'];?> <br>
        </p>
        <p>
            <label> Nome: </label><?php echo $autor['nome'];?> <br>
        </p>
        <p>
            <label> nrTelefone: </label><?php echo $autor['nrTelefone'];?> <br>
        </p>
        <p>
            <label> Email: </label><?php echo $autor['email'];?> <br>
        </p>
</body>
</html>