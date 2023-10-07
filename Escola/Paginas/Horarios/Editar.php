<?php 
include "../../config/config.php";
include "../../funcs/Horarios.funcs.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$Horario = obterHorario($ligacao,$id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id           = $_POST ['id'];
    $turno         = $_POST ['turno'];
    
   
    
    editarHorarios($ligacao,  $id, $turno);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $Horario ['id'];?></title>
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
    <h1>Detalhes de  <?php echo $Horario['id'];?></h1>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $Horario['id']; ?>">
            <label>Turno:</label>
            <br>
            <input type="text" name="turno" value="<?php echo $Horario['turno']; ?>" required>
            <br>
            
          

            <input type="submit" value="Editar Autores">
        </form>
    </div>
    </body>
</html>