<?php 
include "../../config/config.php";
include "../../func/autores.funcs.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$autoras = obterAutor($ligacao,$id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id           = $_POST ['id_Autores'];
    $nome         = $_POST ['nome'];
    $nrTelefone   = $_POST ['nrTelefone'];
    $email        = $_POST ['email'];
   
    
    editarAutor($ligacao,  $id, $nome, $nrTelefone, $email);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $autoras ['id'];?></title>
</head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

    <h1>Detalhes de  <?php echo $autoras['id'];?></h1>

        <form method="POST">
            <input type="hidden" name="id_Autores" value="<?php echo $autoras['id']; ?>">
            <label>Nome:</label>
            <br>
            <input type="text" name="nome" value="<?php echo $autoras['nome']; ?>" required>
            <br>
            <br>
            <label>nrTelefone:</label>
            <br>
            <input type="text" name="nrTelefone" value="<?php echo $autoras['nrTelefone']; ?>" required>
            <br>
            <br>
            <label>email:</label>
            <br>
            <input type="text" name="email" value="<?php echo $autoras['email']; ?>" required>
            <br>

            <input type="submit" value="Editar Autores">
        </form>
    
    </body>
</html>