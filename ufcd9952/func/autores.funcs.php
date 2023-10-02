<?php 
function obterAutores($ligacao){
$stmt = $ligacao->query("SELECT* FROM autores");
$autoras =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $autoras;

}

//Devolve um  literario pelo seu d 
function obterAutor($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM autores WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $autor = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $autor;
}

function inserirAutor($ligacao,$nome, $nrTelefone, $email){
    $stmt = $ligacao->prepare("INSERT INTO autores (nome, nrTelefone, email) VALUES(:nome, :nrTelefone, :email )");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":nrTelefone", $nrTelefone);
    $stmt->bindParam(":email", $email);
    $stmt->execute();


    header("location: ../Autores/listar.autores.php");    
}

function editarAutor($ligacao, $id, $nome, $nrTelefone, $email){
    $stmt = $ligacao->prepare("UPDATE autores set nome = :nome, nrTelefone =:nrTelefone, email = :email where id = :id" );
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":nrTelefone", $nrTelefone);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Autores/listar.autores.php"); 
    exit;
}


function apagarAutores($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM autores WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Autores/listar.autores.php");
    exit;
}
?>
