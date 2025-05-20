<?php

$dsn = "MySql:host=localhost;dbname=ProjetoPHP";
$user = "Gabriel";
$password = 'root';
//$pdo = new PDO($dsn,$username,$password);

try { $conexao = new PDO(dsn: $dsn, Username: $user,
    password: $password);

}
catch(Exception $e){
    echo "Erro de conexão";
    exit;
}

$usuario = $_POST["usuario"];
$senha = $_POST ["Senha"];


$RESULTADO = $conexao -> query(query: "SELECT * FROM usuario where usuario = '$usuario' and senha = '$senha'");

if($RESULTADO -> RowCount() > 0){
    header(header: "location: inicial.php");
} else {
    header(header : "location: index.php?erro=1");
}
?>



