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
    <title>Document</title>
</head>
<body>

<?php  include "../../Componentes/nav.php"?>
<h1>Gerir Generos</h1>

<a href="adicionar.php" >Adicionar Genero</a>

<table>
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
        

        </td>
    </tr>

    <?php } ?>
</table>
    
</body>
</html>