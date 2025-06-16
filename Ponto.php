<?php
include "cabecalho.php"; // Assuming this includes your <head> section with Bootstrap CSS
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"> <a class="navbar-brand" href="#">
            <img src="imagens/Logo.jpg" alt="ControlPoint" width="75" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <li class="nav-item">
                    <h5><a class="nav-link active" aria-current="page" href="inicial.php">Home</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="Ponto.php">Ponto</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="holerite.php">Holerite</a></h5>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Remove body flex properties here if cabecalho.php sets them for the entire page */
    body {
        background-color: #f8f9fa; /* Light background for the body */
        /* If cabecalho.php already applies global body styles, you might not need all of these here.
           However, keeping background-color is fine.
           Remove: display, justify-content, align-items, min-height, padding-top if you want the card centered
           in the remaining space. */
    }

    .main-content-wrapper {
        display: flex;
        justify-content: center; /* Centers the card horizontally */
        align-items: center;     /* Centers the card vertically within its wrapper */
        min-height: calc(100vh - 56px); /* Adjust 56px based on your navbar's height */
        /* You might need to make this wrapper fill the available vertical space. */
        /* A common approach is to make the body a flex container, column direction. */
        padding-top: 20px; /* Add some padding from the navbar */
        padding-bottom: 20px; /* Add some padding at the bottom */
    }

    .card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 600px;
    }
    .buttons .btn {
        margin: 5px;
        min-width: 120px; /* Ensure buttons have similar width */
    }
    .records-list {
        max-height: 300px; /* Limit height for scrollable records */
        overflow-y: auto; /* Enable vertical scrolling */
        border: 1px solid #dee2e6;
        border-radius: .375rem;
        padding: 10px;
        background-color: #e9ecef; /* Light gray background for the list */
    }
    .list-group-item {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        margin-bottom: 5px;
    }
</style>

<div class="main-content-wrapper">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title text-center mb-4">Sistema de Ponto</h1>
            <p class="card-text text-center text-muted mb-4">Registre seus horários abaixo:</p>

            <div class="buttons text-center mb-4">
                <form action="" method="post" class="d-flex flex-wrap justify-content-center">
                    <button type="submit" name="ponto" value="Entrada" class="btn btn-primary">Entrada</button>
                    <button type="submit" name="ponto" value="Almoço" class="btn btn-info text-white">Almoço</button>
                    <button type="submit" name="ponto" value="Retorno do Almoço" class="btn btn-warning text-white">Retorno do Almoço</button>
                    <button type="submit" name="ponto" value="Saída" class="btn btn-danger">Saída</button>
                </form>
            </div>

            <h2 class="h5 mt-4 mb-3 text-center">Registros</h2>
            <div class="records-list">
                <ul class="list-group">
                <?php
                // Define o nome do arquivo para armazenar os pontos
                $file = 'pontos.txt';

                // Função para registrar o ponto
                function registrarPonto($tipoPonto, $arquivo) {
                    date_default_timezone_set('America/Sao_Paulo');
                    $dataHora = date('d/m/Y H:i:s');
                    $registro = "{$dataHora} - {$tipoPonto}\n";

                    file_put_contents($arquivo, $registro, FILE_APPEND | LOCK_EX);
                }

                // Verifica se um botão de ponto foi clicado
                if (isset($_POST['ponto'])) {
                    $tipoPonto = $_POST['ponto'];
                    registrarPonto($tipoPonto, $file);
                }

                // Exibe os pontos registrados
                if (file_exists($file)) {
                    $registros = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    if (!empty($registros)) {
                        foreach (array_reverse($registros) as $registro) {
                            echo "<li class='list-group-item'>" . htmlspecialchars($registro) . "</li>";
                        }
                    } else {
                        echo "<li class='list-group-item text-center'>Nenhum ponto registrado ainda.</li>";
                    }
                } else {
                    echo "<li class='list-group-item text-center'>Nenhum ponto registrado ainda.</li>";
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
include "rodape.php"; // Assuming this includes the closing </body> and </html> tags and Bootstrap JS
?>