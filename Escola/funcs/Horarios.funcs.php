<?php 
function obterHorarios($ligacao){
$stmt = $ligacao->query("SELECT* FROM horário");
$Horarios =$stmt->fetchAll(PDO::FETCH_ASSOC);

return $Horarios;


}

//Devolve um genero literario pelo seu d 
function obterHorario($ligacao, $id){
    $stmt =$ligacao-> prepare ("SELECT * FROM horário WHERE id = :id");
    $stmt ->bindParam (":id", $id);
    $stmt->execute();
    $Horario = $stmt-> fetch (PDO::FETCH_ASSOC);

    return $Horario;
}


//Nao Completo  daqui para a frente


function inseriHorario($ligacao,$turno){
    $stmt = $ligacao->prepare("INSERT INTO horário (turno) VALUES(:turno )");
    $stmt->bindParam(":turno", $turno);
   
   
    $stmt->execute();


    header("location: ../Horarios/listar.php");    
}

function editarHorarios($ligacao, $id, $turno){
    $stmt = $ligacao->prepare("UPDATE  horário SET turno = :turno WHERE id = :id");
    $stmt->bindParam(":turno", $turno);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("location: ../Horarios/listar.php");    
    exit;
}




function apagarHorarios($ligacao, $id){
    $stmt =$ligacao->prepare("DELETE FROM horário WHERE id= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: ../Horarios/listar.php");    
    exit;
}
?>
