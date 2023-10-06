<?php 
include "../../config/config.php";
include "../../funcs/disciplinas.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$disci = obterDisciplina($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Disciplina<?php echo $disci["disciplina"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes da Disciplina <?php echo $disci["disciplina"];?> </h1>
        <p>
            <label> ID: </label><?php echo $disci['id'];?> <br>
        </p>
        <p>
            <label> Disciplina: </label><?php echo $disci['disciplina']; ?><br>
        </p>
</body>
</html>