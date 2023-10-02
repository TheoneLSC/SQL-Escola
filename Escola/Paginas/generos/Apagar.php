<?php 
include "../../config/config.php";
include "../../funcs/generos.func.php";
$ligacao= ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $ligacao = ligarDB();
    $id =$_GET['id'];

   // echo "id: ". $id;
   apagarGeneros($ligacao, $id);
}
?>