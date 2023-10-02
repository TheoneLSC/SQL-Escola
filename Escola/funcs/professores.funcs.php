<?php 
function obterprofessores($ligacao){
$stmt = $ligacao->query("SELECT* FROM professores");
$PRofs =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $PRofs;
}

function obterProfesor($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM professores WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $PRof = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $PRof;
}

function inserirProf($ligacao,$nome,$DataN){
    $stmt = $ligacao->prepare("INSERT INTO professores (nome, DataN) VALUES(:nome, :DataN )");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":DataN", $DataN);
   
    $stmt->execute();


    header("location: ../professores/listar.php");    
}

function editarProfs($ligacao, $id, $nome ,$DataN){
    $stmt = $ligacao->prepare("UPDATE  professores SET nome = :nome, DataN = :DataN WHERE id = :id"); 
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":DataN", $DataN);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../professores/listar.php"); 
    exit;
}


function apagarProfs($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM professores WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../professores/listar.php");
    exit;
}
?>
