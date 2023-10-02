<?php 
function obterEmprestimos($ligacao){
$stmt = $ligacao->query("SELECT* FROM emprestimos");
$Empres =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $Empres;


}

//Devolve um genero literario pelo seu d 
function obterEmprestimo($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM emprestimos WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $Empre = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $Empre;
}
?>
