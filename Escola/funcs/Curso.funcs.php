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