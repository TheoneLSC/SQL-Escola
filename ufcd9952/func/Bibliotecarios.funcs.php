<?php 
function obterBiblios($ligacao){
$stmt = $ligacao->query("SELECT* FROM bibliotecarios");
$biblios =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $biblios;

}

//Devolve um  literario pelo seu d 
function obterBiblio($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM bibliotecarios WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $biblio = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $biblio;
}

function inserirBib($ligacao,$nome, $codBiblio){
    $stmt = $ligacao->prepare("INSERT INTO bibliotecarios (nome, codBiblio) VALUES(:nome, :codBiblio)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":codBiblio", $codBiblio);
    $stmt->execute();


    header("location: ../Bibliotecario/listar.biblio.php");    
}


function editarBiblio($ligacao, $id, $nome, $codBiblio){
    $stmt = $ligacao->prepare("UPDATE bibliotecarios set nome = :nome, codBiblio = :codBiblio where id = :id" );
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":codBiblio", $codBiblio);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    header("location: ../Bibliotecario/listar.biblio.php"); 
    exit;
}


function apagarBiblio($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM bibliotecarios WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Bibliotecario/listar.biblio.php");
    exit;
}
?>