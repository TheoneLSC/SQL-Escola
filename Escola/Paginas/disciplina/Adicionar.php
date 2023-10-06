<?php 
include "../../config/config.php";
include "../../funcs/disciplinas.php";

$ligacao = ligarDB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $disciplina = $_POST['disciplina'];

    

    inserirDisciplina($ligacao,$disciplina);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserir nova disciplina</title>
</head>
<body>
<?php  include "../../Componentes/nav.php"?>
<h1>Inserir nova disciplina</h1>

<form method="POST">

<label>Disciplina:</label>
<br>
<input type="text" name="disciplina" required>
<br>
<br>

<input type="submit" value="Adicionar género">
</form>

</body>
</html>