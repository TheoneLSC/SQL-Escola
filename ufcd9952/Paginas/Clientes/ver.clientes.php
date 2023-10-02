<?php 
include "../../config/config.php";
include "../../func/clientes.funcs.php";

$id = $_GET['id'];
$ligacao = ligarDB();
$Cliente = obterCliente($ligacao, $id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Cliente</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
        <h1>Detalhes de Cliente </h1>
        <p>
            <label> ID: </label><?php echo $Cliente['id'];?> <br>
        </p>
        <p>
            <label> Nome: </label><?php echo $Cliente['nome'];?> <br>
        </p>
        <p>
            <label> Nif: </label><?php echo $Cliente['nif'];?> <br>
        </p>
        <p>
            <label> nrCartaoCliente: </label><?php echo $Cliente['nrCartaoCliente'];?> <br>
        </p>
        <p>
            <label> Historico: </label><?php echo $Cliente['historico'];?> <br>
        </p>
</body>
</html>