<?php 
include "../../config/config.php";
include "../../func/Emprestimos.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$Empres = obterEmprestimo($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Genero literario <?php echo $Empres["id_clientes"]?></title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes de Cliente <?php echo $Empres["id_clientes"];?> </h1>
        <p>
            <label>ID: </label><?php echo $Empres['id'];?> <br>
        </p>
        <p>
            <label>data_emprestimo: </label><?php echo $Empres['data_emprestimo'];?> <br>
        </p>
        <p>
            <label>data_limite: </label><?php echo $Empres['data_limite'];?> <br>
        </p>
        <p>
            <label>taxa: </label><?php echo $Empres['taxa'];?> <br>
        </p>
        <p>
            <label>id_livros: </label><?php echo $Empres['id_livros'];?> <br>
        </p>
        <p>
            <label>id_clientes: </label><?php echo $Empres['id_clientes'];?> <br>
        </p>
        <p>
            <label>id_bibliotecarios: </label><?php echo $Empres['id_bibliotecarios'];?> <br>
        </p>
</body>
</html>