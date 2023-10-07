<?php 
include "../../config/config.php";
include "../../funcs/Turmas.funcs.php";
$ligacao= ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $ligacao = ligarDB();
    $id =$_GET['id'];

   // echo "id: ". $id;
   apagarTurmas($ligacao, $id);
}
?>