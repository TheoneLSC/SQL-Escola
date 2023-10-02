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



function inseriGenero($ligacao,$genero){
    echo "amsousa: " . $genero . "<br>";
    $stmt = $ligacao->prepare("INSERT INTO generos (genero) VALUES(:genero )");
    $stmt->bindParam(":genero", $genero);
   
   
    $stmt->execute(); //<- Nao funciona


    header("location: ../Generos/listar.php");    
}



function editarGeneros($ligacao, $id, $genero){
    $stmt = $ligacao->prepare("UPDATE  generos SET genero = :genero WHERE id = :id");
    $stmt->bindParam(":genero", $genero);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Generos/listar.php"); 
    exit;
}




function apagarGeneros($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM generos WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Generos/listar.php");
    exit;
}
?>
