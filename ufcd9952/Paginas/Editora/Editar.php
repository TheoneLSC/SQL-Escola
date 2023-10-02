<?php 
include "../../config/config.php";
include "../../func/editoras.funcs.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$editor= obterEditora($ligacao,$id);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id     = $_POST ['id_editora'];
    $nome   = $_POST ['nome'];
    $nif     = $_POST ['nif'];
    
    editarEditora($ligacao, $id, $nome, $nif);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $editor ['nome'];?></title>
</head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

    <h1>Detalhes de  <?php echo $editor['nome'];?></h1>

        <form method="POST">
            <input type="hidden" name="id_editora" value="<?php echo $editor['id']; ?>">
            <label>Nome:</label>
            <br>
            <input type="text" name="nome" value="<?php echo $editor['nome']; ?>" required>
            <br>
            <br>
            <label>NIF:</label>
            <br>
            <input type="text" name="nif" value="<?php echo $editor['nif']; ?>" required>
            <br>
            <input type="submit" value="Editar Editora">
        </form>
    
    </body>
</html>