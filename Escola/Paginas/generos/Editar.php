<?php 
include "../../config/config.php";
include "../../funcs/generos.func.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$autoras = obterGenero($ligacao,$id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id           = $_POST ['id'];
    $genero         = $_POST ['genero'];
    
   
    
    editarGeneros($ligacao, $id, $genero);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $autoras ['genero'];?></title>
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
    <h1>Detalhes de  <?php echo $autoras['genero'];?></h1>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $autoras['id']; ?>">
            <label>género:</label>
            <br>
            <input type="text" name="genero" value="<?php echo $autoras['genero']; ?>" required>
            <br>
            
          

            <input type="submit" value="Editar genero">
        </form>
    </div>
    </body>
</html>