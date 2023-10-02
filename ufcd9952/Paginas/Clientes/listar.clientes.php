<?php 
include "../../config/config.php";
include "../../func/clientes.funcs.php";
$ligacao = ligarDB();
$Clientes = obterClientes($ligacao);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerir Clientes</title>
    </head>
    <body>
    <?php  include "../../Componentes/nav.php"?>



        <h1>Gerir Cliente</h1>
        <a href="adicionar.php">Adicionar Cliente</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>NIF</th>    
                <th>nrCartaoCliente</th>
            </tr>

            <?php foreach($Clientes as $Cliente) { ?>

            <tr>
                <td><?php  echo $Cliente["id"]; ?></td>
                <td><?php  echo $Cliente["nome"]; ?></td>
                <td><?php  echo $Cliente["nif"]; ?></td>
                <td><?php  echo $Cliente["nrCartaoCliente"]; ?></td>
                <td>
                    <a href="ver.clientes.php?id=<?php      echo $Cliente['id']; ?>">Ver</a>
                    <a href="editar.php?id=<?php   echo $Cliente['id']; ?>">Editar</a>
                    <a href="apagar.php?id=<?php   echo $Cliente['id']; ?>">Apagar</a>
                    
                </td>
            </tr>
            <?php }  ?>
        </table>
    </body>
</html>