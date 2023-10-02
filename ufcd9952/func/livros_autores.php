<?php 
function obterliv_autors($ligacao){
$stmt = $ligacao->query("SELECT* FROM livros_autores");
$liv_aut =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $liv_aut;


}

//Devolve um genero literario pelo seu d 
function obterLivautor($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM livros_autores WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $liv_au = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $liv_au;
}
?>
