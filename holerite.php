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

<div class="container mt-5 text-center">
    <h1>Holerite</h1>
    <br>
    <p>Visualize e baixe seus holerites mensais.</p>
    <img src="imagens/holherite.jpg" alt="ControlPoint" width="700" height="550">
</div>
<?php
include "rodape.php";
?>