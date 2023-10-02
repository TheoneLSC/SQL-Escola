<?php 
include "../../config/config.php";
include "../../func/Bibliotecarios.funcs.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$bib= obterBiblio($ligacao,$id);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id     = $_POST ['id_clientes'];
    $nome   = $_POST ['nome'];
    $codBiblio     = $_POST ['codBiblio'];

    
    editarBiblio($ligacao, $id, $nome, $codBiblio);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $bib ['nome'];?></title>
</head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

    <h1>Detalhes de  <?php echo $bib['nome'];?></h1>

        <form method="POST">
            <input type="hidden" name="id_clientes" value="<?php echo $bib['id']; ?>">
            <label>Nome:</label>
            <br>
            <input type="text" name="nome" value="<?php echo $bib['nome']; ?>" required>
            <br>
            <br>
            <label>codBiblio:</label>
            <br>
            <input type="text" name="codBiblio" value="<?php echo $bib['codBiblio']; ?>" required>
            <br>
            <input type="submit" value="Editar Bibliotecario">
        </form>
    
    </body>
</html>