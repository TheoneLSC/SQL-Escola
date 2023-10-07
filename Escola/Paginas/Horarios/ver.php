<?php 
include "../../config/config.php";
include "../../funcs/Horarios.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$Horario = obterHorario($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Turno <?php echo $Horario["turno"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes do Turno <?php echo $Horario["turno"];?> </h1>
        <p>
            <label> ID: </label><?php echo $Horario['id'];?> <br>
        </p>
        <p>
            <label> Turno: </label><?php echo $Horario['turno']; ?><br>
        </p>
</body>
</html>