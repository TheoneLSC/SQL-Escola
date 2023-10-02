<?php 
include "../../config/config.php";
include "../../func/editoras.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$Editoras = obterEditora($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Genero literario <?php echo $Editoras["nome"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes de <?php echo $Editoras["nome"];?> </h1>
        <p>
            <label>ID: </label><?php echo $Editoras['id'];?> <br>
        </p>
        <p>
            <label>ID: </label><?php echo $Editoras['nif'];?> <br>
        </p>
</body>
</html>