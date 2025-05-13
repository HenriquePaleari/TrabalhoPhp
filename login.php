<?php

include "cabecalho.php";?>


<form>
  <h1>
    ControlPoint
</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email">
    <small id="emailHelp" class="form-text text-muted"> 
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira a sua senha">
  </div><br>
  <!--<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> (check box)-->
  <a href="inicial.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Enviar</a>
</form>
 
<?php
include "rodape.php";
?>