<?php 
include "../../config/config.php";
include "../../func/autores.funcs.php";
$ligacao = ligarDB();
$Autores = obterAutores($ligacao);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerir Autores</title>
    </head>
    <body>
    <?php  include "../../Componentes/nav.php"?>


        <h1>Gerir Autores</h1>
        <a href="adicionar.php">Adicionar Autores</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>NIF</th>
                <th>Acoes</th>
            </tr>

            <?php foreach($Autores as $Autor) { ?>

            <tr>
                <td><?php  echo $Autor["id"]; ?></td>
                <td><?php  echo $Autor["nome"]; ?></td>
            
                <td>
                    <a href="ver.autores.php?id=<?php      echo $Autor['id']; ?>">Ver</a>
                    <a href="Editar.php?id=<?php   echo $Autor['id']; ?>">Editar</a>
                    <a href="apagar.php?id=<?php   echo $Autor['id']; ?>">Apagar</a>
                </td>
            </tr>
            <?php }  ?>
        </table>
    </body>
</html>