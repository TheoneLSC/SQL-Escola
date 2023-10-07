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
    <style>
    .info {
            border: 1px solid black;
            width: 400px;
            padding: 10px;
            background-color: crimson;
            color: black;
            margin: auto;
            margin-top: 10%;
        }
    </style>
</head>
<body
    data-spy="scroll"
    data-target="#main-nav"
    id="home"
    class="text-white bg-dark">

    <?php  include "./Componentes/nav.php"?>
<div class="info">
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
</div>
</body>
</html>