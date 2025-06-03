<?php
// codigo antigo para estudo:
//$dsn = "mysql:host=localhost;dbname=ControlePonto";
//$username = "usuario1";
//$password = 'root';
//$PDO = new PDO($dsn,$username,$password);

//$stmt = $pdo->query("SELECT * FROM Usuarios");

//while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)){
  // echo $usuario ['id'] . "-" . $usuario['login'] . "-" . $usuario ['Senha'] . "<br>";
//}

//try { $conexao = new PDO($dsn, Username: $user,
  //   password: $password);
    //}
//catch(Exception $erro){
  //  echo "Erro de conexão";
    //exit;
//}

//$usuario = $_POST["usuario"];
//$senha = $_POST ["Senha"];


//$RESULTADO = $conexao -> query(query: "SELECT * FROM usuario where usuario = '$usuario' and senha = '$senha'");

//if($RESULTADO -> RowCount() > 0){
    header("location: inicial.php");
//} else {
//    header( "location: index.php?erro=1");
//}

$dsn = "mysql:host=localhost;dbname=ControlePonto;charset=utf8";
$username = "usuario1";
$password = "root";


try {
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $stmt = $pdo->query("SELECT * FROM Usuarios");

    while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $usuario['id'] . " - " . $usuario['login'] . " - " . $usuario['senha'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"] ?? '';
    $senha = $_POST["senha"] ?? '';

    echo "Usuário recebido via POST: $usuario<br>";
    echo "Senha recebida via POST: $senha<br>";
}
?>



