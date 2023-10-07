<?php 
include "../../config/config.php";
include "../../funcs/disciplinas.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$disci = obterDisciplina($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Disciplina<?php echo $disci["disciplina"]?></title>
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
<?php  include "../../Componentes/nav.php"?>
<div class="info">
        <h1>Detalhes da Disciplina <?php echo $disci["disciplina"];?> </h1>
        <p>
            <label> ID: </label><?php echo $disci['id'];?> <br>
        </p>
        <p>
            <label> Disciplina: </label><?php echo $disci['disciplina']; ?><br>
        </p>
    </div>
</body>
</html>