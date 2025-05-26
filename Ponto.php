<?php 

include "cabecalho.php";

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="imagens/Logo.jpg" alt="ControlPoint" width="75" height="24">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <h5><a class="nav-link" href="inicial.php">Home<span class="sr-only"></span></a></h5>
      </li>
      <li class="nav-item">
        <h5><a class="nav-link" href="Ponto.php">Ponto</a></h5>
      </li>
      <li class="nav-item">
        <h5><a class="nav-link" href="holerite.php">Holerite</a></h5>
      </li>
    </ul>
  </div>
</nav> 

<div class="container text-center mt-5">
    <h1>Sistema de Ponto</h1>
    <p>Registre seus horários abaixo:</p>
    <div class="d-flex justify-content-center">
        <button class="btn btn-secondary btn-lg mx-2" onclick="registrarPonto('entrada')">Entrada</button>
        <button class="btn btn-secondary btn-lg mx-2" onclick="registrarPonto('almoco')">Almoço</button>
        <button class="btn btn-secondary btn-lg mx-2" onclick="registrarPonto('volta')">Retorno do Almoço</button>
        <button class="btn btn-secondary btn-lg mx-2" onclick="registrarPonto('saida')">Saída</button>
    </div>
    <div class="mt-4">
        <h3>Registros</h3>
        <ul id="registroLista" class="list-group"></ul>
    </div>
</div>

    <script>
        function registrarPonto(tipo) {
            const agora = new Date();
            const horario = agora.toLocaleTimeString('pt-BR');
            const registroLista = document.getElementById("registroLista");
            const novoRegistro = document.createElement("li");
            novoRegistro.className = "list-group-item";
            novoRegistro.textContent = ${tipo.charAt(0).toUpperCase() + tipo.slice(1)}: ${horario};
            registroLista.appendChild(novoRegistro);
        }
    </script>
<?php

include "rodape.php";
?>
