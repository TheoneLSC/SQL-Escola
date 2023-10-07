<?php 
function obterCursos($ligacao){
$stmt = $ligacao->query("SELECT* FROM curso");
$Curso =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $Curso;


}

//Devolve um genero literario pelo seu d 
function obterCurso($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM curso WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $Curso = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $Curso;
}


function inserircurso($ligacao ,$nome ,$duracao, $id_horario, $id_disciplina, $id_turma){
    $stmt = $ligacao->prepare("INSERT INTO curso (nome, duracao, id_horario, id_disciplina,id_turma) VALUES(:nome, :duracao, :id_horario, :id_disciplina, :id_turma )");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":duracao", $duracao);
    $stmt->bindParam(":id_horario", $id_horario);
    $stmt->bindParam(":id_disciplina", $id_disciplina);
    $stmt->bindParam(":id_turma", $id_turma);
    
   
   
    $stmt->execute();


    header("location: ../Curso/listar.php");    
}




function editarcurso($ligacao,$nome,$duracao,$id_horario,$id_disciplina, $id_turma, $id){
    $stmt = $ligacao->prepare("UPDATE  curso SET nome = :nome, duracao = :duracao, id_horario = :id_horario, id_disciplina = :id_disciplina, id_turma=:id_turma WHERE id = :id");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":duracao", $duracao);
    $stmt->bindParam(":id_horario", $id_horario);
    $stmt->bindParam(":id_disciplina", $id_disciplina);
    $stmt->bindParam(":id_turma", $id_turma);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Curso/listar.php"); 
    exit;
}




function apagarcurso($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM curso WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Curso/listar.php");
    exit;
}
?>
