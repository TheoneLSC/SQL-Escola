

<?php
define("DB_HOST", "localhost"); //Servidor 
define("DB_USER","root"); //Utilizador da base de dados
define("DB_PASS",""); //Palavra passe do utilizador da base de dados
define("DB_NAME","ufcd9952"); //nome da base de dados
define("DSN_USE","mysql:host=" .DB_HOST.";dbname=".DB_NAME); //Link para a base de dados
define("CONFIG_OP", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //configuração dos erros da ligação da base de dados

function ligarDB (){

    try{
        $conn= new PDO(DSN_USE, DB_USER, DB_PASS);//ligar a base de dados
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //echo "Ligação efetuada com sucesso";
    }catch(PDOException$e){
        //echo"Ligação falhou".$e->getMessage();

    }
    return $conn;
}
?>