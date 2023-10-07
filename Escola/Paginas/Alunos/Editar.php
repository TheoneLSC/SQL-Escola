<?php 
include "../../config/config.php";
include "../../funcs/Alunos.funcs.php";

$id = $_GET['id'];
$ligacao= ligarDB();
$Alunos = obterAluno($ligacao, $id);
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id           = $_POST ['id'];
    $nome   = $_POST ['nome'];
    $DataN   = $_POST ['DataN'];
    $id_genero   = $_POST ['id_genero'];
   
   
    
    editarAlunos($ligacao, $id, $nome, $DataN, $id_genero );
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de  <?php echo $Turma ['id'];?></title>
    <style>
        .info {
            border: 1px solid black;
            width: 400px;
            padding: 10px;
            background-color: crimson;
            color: black;
            margin: auto;
            margin-top: 10%;
        }
    </style>
</head>
<body
    data-spy="scroll"
    data-target="#main-nav"
    id="home"
    class="text-white bg-dark">

    <?php  include "../../Componentes/nav.php"?>
<div class="info">
    <h1>Detalhes de  <?php echo $Alunos['id'];?></h1>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $Alunos['id']; ?>">
            <label>Nome:</label>
            <br>
            <input type="text" name="nome" value="<?php echo $Alunos['nome']; ?>" required>
            <br>
            <br>
            <label>DataN:</label>
            <br>
            <input type="text" name="DataN" value="<?php echo $Alunos['DataN']; ?>" required>
            <br>
            <br>
            <label>Id do genero:</label>
            <br>
            <input type="int" name="id_genero" value="<?php echo $Alunos['id_genero']; ?>" required>
            <br>
            <br>
         
           

            <input type="submit" value="Editar Professores">
        </form>
    </div>
    </body>
</html>