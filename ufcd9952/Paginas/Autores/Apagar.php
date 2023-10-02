<?php 
include "../../config/config.php";
include "../../func/autores.funcs.php";
$ligacao= ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $ligacao = ligarDB();
    $id =$_GET['id'];

   // echo "id: ". $id;
   apagarAutores($ligacao, $id);
}
?>