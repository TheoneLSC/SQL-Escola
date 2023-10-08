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
    <title>Gerir Turno</title>
    <style>
        .info {
            border: 1px solid black;
            width: 400px;
            padding: 10px;
            background-color: crimson;
            color: black;
            margin: auto;
            margin-top: 10%;
        }
    </style>
</head>
<body
    data-spy="scroll"
    data-target="#main-nav"
    id="home"
    class="text-white bg-dark">
<?php  include "../../Componentes/nav.php"?>
<div class="info">
<h1>Gerir Turno</h1>

<a href="adicionar.php" >Adicionar Turno</a>

<table border="1" >
<tr>
    
    <th>ID</th>
    <th>Turno</th>
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
</div>
</body>
</html>