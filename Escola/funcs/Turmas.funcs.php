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

function inserirTurma($ligacao,$Turmas,$ano,$id_aluno,$id_professor){
    $stmt = $ligacao->prepare("INSERT INTO turmas (Turmas, ano,id_aluno,id_professor) VALUES(:Turmas, :ano,:id_aluno, :id_professor )");
    $stmt->bindParam(":Turmas", $Turmas);
    $stmt->bindParam(":ano", $ano);
    $stmt->bindParam(":id_aluno", $id_aluno);
    $stmt->bindParam(":id_professor", $id_professor);
   
    $stmt->execute();


    header("location: ../Turmas/listar.php");    
}




function apagarTurmas($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM turmas WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Turmas/listar.php");
    exit;
}

function EditarTurma($ligacao,$Turmas,$ano,$id_aluno,$id_professor,$id){
    $stmt = $ligacao->prepare("UPDATE  turmas SET Turmas = :Turmas, ano = :ano, id_aluno=:id_aluno, id_professor=:id_professor WHERE id = :id"); 
    $stmt->bindParam(":Turmas", $Turmas);
    $stmt->bindParam(":ano", $ano);
    $stmt->bindParam(":id_aluno", $id_aluno);
    $stmt->bindParam(":id_professor", $id_professor);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Turmas/listar.php");
    exit;
}








?>