<?php 
function obterClientes($ligacao){
$stmt = $ligacao->query("SELECT* FROM clientes");
$Clientes =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $Clientes;

}

//Devolve um  literario pelo seu d 
function obterCliente($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM clientes WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $Cliente = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $Cliente;
}


function inserirClient($ligacao,$nome, $nif,$nrCartaoCliente, $historico){
    $stmt = $ligacao->prepare("INSERT INTO clientes (nome, nif,nrCartaoCliente,historico) VALUES(:nome, :nif, :nrCartaoCliente, :historico)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":nif", $nif);
    $stmt->bindParam(":nrCartaoCliente", $nrCartaoCliente);
    $stmt->bindParam(":historico", $historico);
    $stmt->execute();


    header("location: ../Clientes/listar.clientes.php");    
}

function editarClientes($ligacao, $id, $nome, $nif,$nrCartaoCliente, $historico){
    $stmt = $ligacao->prepare("UPDATE  clientes SET nome = :nome, nif = :nif, nrCartaoCliente = :nrCartaoCliente, historico =:historico WHERE id = :id");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":nif", $nif);
    $stmt->bindParam(":nrCartaoCliente", $nrCartaoCliente);
    $stmt->bindParam(":historico", $historico);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Clientes/listar.clientes.php"); 
    exit;
}




function apagarClientes($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM clientes WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Clientes/listar.clientes.php");
    exit;
}
?>