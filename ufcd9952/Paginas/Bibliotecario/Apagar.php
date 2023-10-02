<?php 
include "../../config/config.php";
include "../../func/Bibliotecarios.funcs.php";
$ligacao= ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $ligacao = ligarDB();
    $id =$_GET['id'];

   // echo "id: ". $id;
   apagarBiblio($ligacao, $id);
}
?>