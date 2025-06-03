<?php
// Conexão com o banco
$dsn = "mysql:host=localhost;dbname=ControlePonto;charset=utf8";
$username = "usuario1"; // Usuário do MySQL com acesso
$password = "root";      // Senha desse usuário

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recebe os dados do formulário
    $usuario = $_POST["usuario"] ?? '';
    $senha = $_POST["senha"] ?? '';

    // Consulta para verificar se o usuário e senha existem
    $sql = "SELECT * FROM Usuarios WHERE login = :usuario AND senha = :senha";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":usuario", $usuario);
    $stmt->bindParam(":senha", $senha); // ATENÇÃO: veja nota de segurança abaixo

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Login bem-sucedido! Bem-vindo, $usuario.";
        // Aqui você pode iniciar a sessão e redirecionar, por exemplo:
        // session_start();
        // $_SESSION['usuario'] = $usuario;
        // header("Location: painel.php");
    } else {
        echo "Usuário ou senha incorretos.";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>