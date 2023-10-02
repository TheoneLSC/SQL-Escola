<?php 
include "../../config/config.php";
include "../../func/Bibliotecarios.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$BIB = obterBiblio($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do <?php echo $BIB["nome"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes de <?php echo $BIB["nome"];?> </h1>
        <p>
            <label>ID: </label><?php echo $BIB['id'];?> <br>
        </p>
        <p>
            <label>nome: </label><?php echo $BIB['nome'];?> <br>
        </p>
        <p>
            <label>codBiblio: </label><?php echo $BIB['codBiblio'];?> <br>
        </p>
       
</body>
</html>