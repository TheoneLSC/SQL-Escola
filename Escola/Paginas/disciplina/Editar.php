<?php 
include "../../config/config.php";
include "../../funcs/disciplinas.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$disciplina = obterDisciplina($ligacao, $id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id           = $_POST ['id'];
    $disciplina         = $_POST ['disciplina'];
    
   
    
    editarDisciplinas($ligacao, $id, $disciplina);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $disciplina ['disciplina'];?></title>
</head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

    <h1>Detalhes de  <?php echo $disciplina['disciplina'];?></h1>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $disciplina['id']; ?>">
            <label>género:</label>
            <br>
            <input type="text" name="disciplina" value="<?php echo $disciplina['disciplina']; ?>" required>
            <br>
            
          

            <input type="submit" value="Editar Autores">
        </form>
    
    </body>
</html>