<?php
// Dados de conexão com o banco
$dsn = "mysql:host=localhost;dbname=ControlePonto;charset=utf8";
$username = "usuario1"; // Usuário do MySQL com acesso
$password = "root";      // Senha desse usuário

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os dados do formulário
        $usuario = $_POST["usuario"] ?? '';  // Nome do usuário (login)
        $senha = $_POST["senha"] ?? '';      // Senha fornecida pelo usuário

        // Consulta para verificar se o usuário existe
        $sql = "SELECT * FROM Usuarios WHERE login = :usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":usuario", $usuario);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // O usuário existe no banco
            $usuario_bd = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifica se a senha fornecida corresponde ao hash armazenado no banco
            if (password_verify($senha, $usuario_bd['senha'])) {
                // Se a senha estiver correta
                session_start();  // Inicia a sessão
                $_SESSION['usuario'] = $usuario;  // Armazena o nome de usuário na sessão
                header("Location: inicial.php");  // Redireciona para a página inicial
                exit;
            } else {
                // Senha incorreta
                echo "Senha incorreta.";
            }
        } else {
            // Usuário não encontrado
            echo "Usuário não encontrado.";
        }
    }
} catch (PDOException $e) {
    // Caso ocorra algum erro de conexão ou execução
    echo "Erro: " . $e->getMessage();
}
?>