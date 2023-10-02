<?php 
include "../../config/config.php";
include "../../func/Emprestimos.funcs.php";
$ligacao = ligarDB();
$Emp = obterEmprestimos($ligacao);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerir Emprestimos</title>
    </head>
    <body>

    <?php  include "../../Componentes/nav.php"?>

        <h1>Gerir Emprestimos</h1>
        <a href="adicionar.php">Adicionar Emprestimos</a>
        <table>
            <tr>
                <th>ID </th>
                <th>data_emprestimo </th>
                <th>data_limite </th>
              
                
                
                
            </tr>

            <?php foreach($Emp as $Emp) { ?>

            <tr>
                <td><?php  echo $Emp["id"]; ?></td>
                <td><?php  echo $Emp["data_emprestimo"]; ?></td>
                <td><?php  echo $Emp["data_limite"]; ?></td>
                
                
                <td>
                    <a href="ver.emprestimos.php?id=<?php      echo $Emp['id']; ?>">Ver</a>
                    <a href="editar.php?id=<?php   echo $Emp['id']; ?>">Editar</a>
                    <a href="apagar.php?id=<?php   echo $Emp['id']; ?>">Apagar</a>
                </td>
            </tr>
            <?php }  ?>
        </table>
    </body>
</html>