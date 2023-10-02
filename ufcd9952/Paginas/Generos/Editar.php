<?php 
include "../../config/config.php";
include "../../func/generos.func.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$gen= obterGenero($ligacao,$id);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id     = $_POST ['id_Generos'];
    $tema   = $_POST ['tema'];
   
    
    editarGeneros($ligacao, $id ,$tema);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $gen ['tema'];?></title>
</head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

    <h1>Detalhes de  <?php echo $gen['tema'];?></h1>

        <form method="POST">
            <input type="hidden" name="id_Generos" value="<?php echo $gen['id']; ?>">
            <label>tema:</label>
            <br>
            <input type="text" name="tema" value="<?php echo $gen['tema']; ?>" required>
            <br>
            <br>
            <input type="submit" value="Editar Generos">
        </form>
    
    </body>
</html>