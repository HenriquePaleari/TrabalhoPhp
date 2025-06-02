<?php

$dsn = "MySql:host=localhost;dbname=ControlePonto";
$username = "usuario1";
$password = 'root';
$pdo = new PDO($dsn,$username,$password);

$stmt = $pdo->query("SELECT * FROM Usuarios");
while ($usuario = $stmt->fetch(PDO::FECTCH_ASSOC)){
   echo $usuario ['id'] . "-" . $usuario['login'] . "-" . $usuario ['Senha'] . "<br>";
}

try { $conexao = new PDO($dsn, Username: $user,
     password: $password);
    }
catch(Exception $erro){
    echo "Erro de conexão";
    exit;
}

$usuario = $_POST["usuario"];
$senha = $_POST ["Senha"];


$RESULTADO = $conexao -> query(query: "SELECT * FROM usuario where usuario = '$usuario' and senha = '$senha'");

if($RESULTADO -> RowCount() > 0){
    header("location: inicial.php");
} else {
    header( "location: index.php?erro=1");
}
?>



