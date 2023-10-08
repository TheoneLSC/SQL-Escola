<?php 
include "../../config/config.php";
include "../../funcs/Alunos.funcs.php";
$ligacao = ligarDB();
$alunos = obterAlunos($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
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
<h1>Gerir alunos</h1>
<a href="adicionar.php" >Adicionar aluno</a>

<table border="1" >
    
<tr>
    
    <th>ID</th>
    <th>Nome</th>
    <th>DataN</th>
    <th>id_genero</th>
</tr>

<?php foreach($alunos as $aluno){ ?>
    <tr>

    <td><?php echo $aluno ["id"]; ?></td>
    <td><?php echo $aluno ["nome"]; ?></td>
    <td><?php echo $aluno ["DataN"]; ?></td>
    <td><?php echo $aluno ["id_genero"]; ?></td>
    <td>
        <a href="ver.php?id=<?php echo $aluno ['id']; ?>">Ver</a>
        <a href="Editar.php?id=<?php echo $aluno ['id']; ?>">Editar </a>
        <a href="Apagar.php?id=<?php echo $aluno ['id']; ?>">Apagar </a>

        </td>
    </tr>

    <?php } ?>
</table>
 </div>   
</body>
</html>