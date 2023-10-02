<?php 
include "../../config/config.php";
include "../../funcs/Horarios.funcs.php";
$ligacao = ligarDB();
$Horarios = obterHorarios($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>

<h1>Gerir Trunos</h1>

<a href="adicionar.php" >Adicionar Turnos</a>

<table>
<tr>
    
    <th>ID</th>
    <th>Turnos</th>
</tr>

<?php foreach($Horarios as $Horario){ ?>
    <tr>

    <td><?php echo $Horario ["id"]; ?></td>
    <td><?php echo $Horario ["turno"]; ?></td>
    <td>
        <a href="ver.php?id=<?php echo $Horario ['id']; ?>">Ver</a>
        <a href="Editar.php?id=<?php echo $Horario ['id']; ?>">editar</a>
        <a href="Apagar.php?id=<?php echo $Horario ['id']; ?>">Apagar</a>

        </td>
    </tr>

    <?php } ?>
</table>
    
</body>
</html>