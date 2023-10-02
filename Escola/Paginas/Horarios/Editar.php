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
</head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

    <h1>Detalhes de  <?php echo $Horario['id'];?></h1>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $Horario['id']; ?>">
            <label>Turno:</label>
            <br>
            <input type="text" name="turno" value="<?php echo $Horario['turno']; ?>" required>
            <br>
            
          

            <input type="submit" value="Editar Autores">
        </form>
    
    </body>
</html>