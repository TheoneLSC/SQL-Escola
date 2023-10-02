<?php 
function obterGeneros($ligacao){
$stmt = $ligacao->query("SELECT* FROM generos");
$generos =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $generos;


}

//Devolve um genero literario pelo seu d 
function obterGenero($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM generos WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $genero = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $genero;
}

function inserirGener($ligacao,$tema){
    $stmt = $ligacao->prepare("INSERT INTO generos (tema) VALUES(:tema )");
    $stmt->bindParam(":tema", $tema);
   
   
    $stmt->execute();


    header("location: ../Generos/listar.genero.php");    
}

function editarGeneros($ligacao, $id, $tema){
    $stmt = $ligacao->prepare("UPDATE  generos SET tema = :tema WHERE id = :id");
    $stmt->bindParam(":tema", $tema);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Generos/listar.genero.php"); 
    exit;
}




function apagarGeneros($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM generos WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Generos/listar.genero.php");
    exit;
}
?>
