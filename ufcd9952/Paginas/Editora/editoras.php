<?php 
include "../../config/config.php";
include "../../func/editoras.funcs.php";
$ligacao = ligarDB();
$Editoras = obterEditoras($ligacao);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerir Editoras</title>
    </head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

        <h1>Gerir Editoras</h1>
        <a href="Adicionar.php">Adicionar Editora</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>NIF</th>
                <th>Acoes</th>
            </tr>

            <?php foreach($Editoras as $Editoras) { ?>

            <tr>
                <td><?php  echo $Editoras["id"]; ?></td>
                <td><?php  echo $Editoras["nome"]; ?></td>
                <td><?php  echo $Editoras["nif"]; ?></td>
                <td>
                    <a href="ver.editoras.php?id=<?php      echo $Editoras['id']; ?>">Ver</a>
                    <a href="editar.php?id=<?php   echo $Editoras['id']; ?>">Editar</a>
                    <a href="Apagar.php?id=<?php   echo $Editoras['id']; ?>">Apagar</a>
                </td>
            </tr>
            <?php }  ?>
        </table>
    </body>
</html>