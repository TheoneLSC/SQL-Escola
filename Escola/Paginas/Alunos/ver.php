<?php 
include "../../config/config.php";
include "../../funcs/Alunos.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$Aluno = obterAluno($ligacao, $id);

?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Aluno<?php echo $Aluno["nome"]?></title>
</head>
<body
    data-spy="scroll"
    data-target="#main-nav"
    id="home"
    class="text-white bg-dark">
<?php  include "../../Componentes/nav.php"?>
<div class="info">
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
</div>
</body>
</html>