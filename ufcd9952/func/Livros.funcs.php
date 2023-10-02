<?php 
function obterLivros($ligacao){
$stmt = $ligacao->query("SELECT* FROM livros");
$live =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $live;


}

//Devolve um genero literario pelo seu d 
function obterLivro($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM livros WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $livro = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $livro;
}
?>