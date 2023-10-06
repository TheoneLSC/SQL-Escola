<?php 
function obterAlunos($ligacao){
$stmt = $ligacao->query("SELECT* FROM alunos");
$disciplina =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $disciplina;


}

//Devolve um genero literario pelo seu d 
function obterAluno($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM alunos WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $disciplina = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $disciplina;
}