<?php 
function obterDisciplinas($ligacao){
$stmt = $ligacao->query("SELECT* FROM disciplina");
$disciplina =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $disciplina;


}

//Devolve um genero literario pelo seu d 
function obterDisciplina($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM disciplina WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $disciplina = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $disciplina;
}

function inserirDisciplina($ligacao,$disciplina){
    $stmt = $ligacao->prepare("INSERT INTO disciplina (disciplina) VALUES(:disciplina )");
    $stmt->bindParam(":disciplina", $disciplina);
   
   
    $stmt->execute();


    header("location: ../disciplina/listar.php");    
}


//Nao Completo  daqui para a frente

function editarDisciplinas($ligacao, $id, $disciplina){
    $stmt = $ligacao->prepare("UPDATE  disciplina SET disciplina = :disciplina WHERE id = :id");
    $stmt->bindParam(":disciplina", $disciplina);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../disciplina/listar.php"); 
    exit;
}




function apagarDisciplina($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM disciplina WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../disciplina/listar.php");
    exit;
}
?>
