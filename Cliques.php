<form method="post" action="processa_clique.php">
    <button type="submit" name="botao_clicado">Clique Aqui</button>
</form>

<?php
// Configurações de conexão com o banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "nome_do_banco";

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Verifica se o botão foi clicado
if (isset($_POST['botao_clicado'])) {
    // Obtém o timestamp atual
    $timestamp = date("Y-m-d H:i:s");

    // Insere os dados na tabela
    $sql = "INSERT INTO cliques (data_hora) VALUES ('$timestamp')";

    if ($conexao->query($sql) === TRUE) {
        echo "Registro de clique inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conexao->error;
    }
}

// Fecha a conexão
$conexao->close();
?>