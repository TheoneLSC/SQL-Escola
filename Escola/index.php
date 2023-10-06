<?php 
include "./config/config.php";

$ligacao = ligarDB();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>

    <?php  include "./Componentes/nav.php"?>

    <h1>Titulo</h1>

    <?php
    define("MINHA_CONST", "escolapro"); //MINHA_CONST  feito para edentificar que e uma constante 
    $nome =10;
    $nome2=5;
    //$res = $nome +$nome2;


    echo "<h2>".($nome+$nome2)."</h2>";
    echo "<h3>".MINHA_CONST." </h3>";
    echo"servidor:" .DB_HOST."<br>";
    echo"login:".DB_USER."<br>";
    echo"password:".DB_PASS."<br>";
    ?>

</body>
</html>