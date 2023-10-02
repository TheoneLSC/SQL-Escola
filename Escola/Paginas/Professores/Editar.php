<?php 
include "../../config/config.php";
include "../../funcs/professores.funcs.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$professor = obterProfesor($ligacao, $id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id           = $_POST ['id'];
    $nome         = $_POST ['nome'];
    $DataN   = $_POST ['DataN'];
   
   
    
    editarProfs($ligacao,  $id, $nome, $DataN);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $professor ['id'];?></title>
</head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

    <h1>Detalhes de  <?php echo $professor['id'];?></h1>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $professor['id']; ?>">
            <label>Nome:</label>
            <br>
            <input type="text" name="nome" value="<?php echo $professor['nome']; ?>" required>
            <br>
            <br>
            <label>Data Nascimento:</label>
            <br>
            <input type="text" name="DataN" value="<?php echo $professor['DataN']; ?>" required>
            <br>
            <br>
            

            <input type="submit" value="Editar Professores">
        </form>
    
    </body>
</html>