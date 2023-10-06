<?php 
include "../../config/config.php";
include "../../funcs/Turmas.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$Turma = obterTurma($ligacao,$id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Turma  <?php echo $Turma["Turmas"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>

        <h1>Detalhes da Turma <?php echo $Turma["Turma"];?> </h1>
        <p>
            <label> ID: </label><?php echo $Turma['id'];?> <br>
        </p>
        <p>
            <label> Turma: </label><?php echo $Turma['Turmas']; ?><br>
        </p>
        <p>
            <label> Ano:  </label><?php echo $Turma['ano']; ?><br>
        </p>
        <p>
            <label>id_Aluno: </label><?php echo $Turma['id_aluno']; ?><br>
        </p>
        <p>
            <label>id_professor: </label><?php echo $Turma ['id_professor']; ?>
        </p>
</body>
</html>