<?php 
function obterAlunos($ligacao){
$stmt = $ligacao->query("SELECT* FROM alunos");
$aluno =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $aluno;


}

//Devolve um genero literario pelo seu d 
function obterAluno($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM alunos WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $aluno = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $aluno;
}

function inserirAlunos($ligacao,$nome,$DataN,$id_genero){
    $stmt = $ligacao->prepare("INSERT INTO alunos (nome, DataN, id_genero) VALUES(:nome, :DataN, :id_genero )");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":DataN", $DataN);
    $stmt->bindParam(":id_genero", $id_genero);
   
   
    $stmt->execute();


    header("location: ../Alunos/listar.php");    
}




function editarAlunos($ligacao, $id, $nome, $DataN, $id_genero ){
    $stmt = $ligacao->prepare("UPDATE  alunos SET nome = :nome, DataN = :DataN, id_genero = :id_genero WHERE id = :id");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":DataN", $DataN);
    $stmt->bindParam(":id_genero", $id_genero);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Alunos/listar.php"); 
    exit;
}




function apagarAlunos($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM alunos WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Alunos/listar.php");
    exit;
}
?>
