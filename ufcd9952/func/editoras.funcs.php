<?php 
function obterEditoras($ligacao){
$stmt = $ligacao->query("SELECT* FROM Editoras");
$editoras =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $editoras;

}

//Devolve um  literario pelo seu d 
function obterEditora($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM Editoras WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $editora = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $editora;
}


function inserirEditora($ligacao,$nome, $nif){
    $stmt = $ligacao->prepare("INSERT INTO Editoras (nome, nif) VALUES(:nome, :nif)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":nif", $nif);
    $stmt->execute();


    header("location: ../Editora/editoras.php");    
    exit;
}

function editarEditora($ligacao, $id, $nome, $nif){
    $stmt = $ligacao->prepare("UPDATE  Editoras SET nome = :nome, nif = :nif WHERE id = :id");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":nif", $nif);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Editora/editoras.php"); 
    exit;
}


function apagarEditora($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM Editoras WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Editora/editoras.php");
    exit;
}

?>

