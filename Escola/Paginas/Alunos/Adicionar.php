<?php 
include "../../config/config.php";
include "../../funcs/Alunos.funcs.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome  = $_POST['nome'];
    $DataN  = $_POST['DataN'];
    $id_genero  = $_POST['id_genero'];
    
    

    inserirAlunos($ligacao,$nome,$DataN,$id_genero);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir novo Aluno</title>
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
<h1>Inserir novo Aluno</h1>

<form method="POST">

<label>nome:</label>
<br>
<input type="text" name="nome" required>
<br>
<br>

<label>DataN:</label>
<br>
<input type="data" name="DataN" value= "<?php echo "ano-mes-dia"?>" required >
<br>
<br>

<label>id_genero:</label>
<br>
<input type="int" name="id_genero" required>
<br>
<br>



<input type="submit" value="Adicionar Cliente">
</form>
</div>
</body>
</html>