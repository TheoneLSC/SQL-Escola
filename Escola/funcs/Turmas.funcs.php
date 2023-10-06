<?php 
function obterTurmas($ligacao){
$stmt= $ligacao->query("SELECT* FROM turmas");
$Turm =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $Turm;}

function obterTurma($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM turmas WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $Turm = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $Turm;
}















?>