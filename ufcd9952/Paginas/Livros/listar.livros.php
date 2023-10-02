<?php 
include "../../config/config.php";
include "../../func/Livros.funcs.php";
$ligacao = ligarDB();
$live = obterLivros($ligacao);
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
<h1>Gerir Livros</h1>

<a href="adicionar.php" >Adicionar Livros</a>

<table>
<tr>
    
    <th>ID</th>
    <th>Genero</th>
</tr>

<?php foreach($live as $livro){ ?>
    <tr>

    <td><?php echo $livro ["id"]; ?></td>
  
    
    
    <td>
        <a href="ver.livros.php?id=<?php echo $livro ['id']; ?>">Ver</a>
        <a href="editar.php?id=<?php echo $livro ['id']; ?>">editar</a>
        <a href="apagar.php?id=<?php echo $livro ['id']; ?>">Apagar</a>

        </td>
    </tr>

    <?php } ?>
</table>
    
</body>
</html>