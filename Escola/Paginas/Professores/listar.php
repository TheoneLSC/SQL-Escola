<?php 
include "../../config/config.php";
include "../../funcs/professores.funcs.php";
$ligacao = ligarDB();
$PRofs = obterprofessores($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body
    data-spy="scroll"
    data-target="#main-nav"
    id="home"
    class="text-white bg-dark">
<?php  include "../../Componentes/nav.php"?>
<div class="info">
<h1>Gerir professores</h1>

<a href="adicionar.php" >Adicionar Genero</a>

<table>
<tr>
    
    <th>ID</th>
    <th>Professor</th>
    <th>Data de nascimento</th>
</tr>

<?php foreach($PRofs as $PRof){ ?>
    <tr>

    <td><?php echo $PRof ["id"]; ?></td>
    <td><?php echo $PRof ["nome"]; ?></td>
    <td><?php echo $PRof ["DataN"]; ?></td>
    <td>
        <a href="ver.php?id=<?php echo $PRof ['id']; ?>">Ver</a>
        <a href="Editar.php?id=<?php echo $PRof ['id']; ?>">editar</a>
        <a href="Apagar.php?id=<?php echo $PRof ['id']; ?>">Apagar</a>

        </td>
    </tr>

    <?php } ?>
</div>
</table>
    
</body>
</html>