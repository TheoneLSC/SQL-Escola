<?php 
include "../../config/config.php";
include "../../funcs/Alunos.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$Aluno = obterAluno($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Aluno <?php echo $Aluno["nome"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes do Aluno <?php echo $Aluno["nome"];?> </h1>
        <p>
            <label> ID: </label><?php echo $Aluno['id'];?> <br>
        </p>
        <p>
            <label> Nome: </label><?php echo $Aluno['nome']; ?><br>
        </p>
        <p>
            <label>DataN: </label><?php echo $Aluno['DataN'];?><br>
        </p>
        <p>
            <label>id_genero: </label><?php echo $Aluno['id_genero'];?>
        </p>
</body>
</html>