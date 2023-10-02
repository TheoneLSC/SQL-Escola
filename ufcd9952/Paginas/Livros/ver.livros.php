<?php 
include "../../config/config.php";
include "../../func/Livros.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$livro = obterLivro($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Livro <?php echo $livro["id"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes de Livro <?php echo $livro["id"];?> </h1>
        <p>
            <label> ID: </label><?php echo $livro['id'];?> <br>
        </p>
        <p>
            <label> isbn: </label><?php echo $livro['isbn'];?> <br>
            </p>
            <p>
            <label> titulo:</label><?php echo $livro['titulo'];?><br>
            </p>
            <p>
            <label> disponibilidades:</label><?php echo $livro['disponibilidades'];?><br>
            </p>
       
       
</body>
</html>