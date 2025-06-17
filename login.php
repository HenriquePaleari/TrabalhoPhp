<?php
include "cabecalho.php";
?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4">
        <form action="logar.php" method="post" class="p-4 border rounded shadow bg-white">
            <img src="imagens/Logo.jpg" alt="Logo.jpg" class="img-fluid mx-auto d-block">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira a sua senha">
            </div>
            <br>
            <div class="text-center">
                <input type="submit" value="Enviar" class="btn btn-primary btn-md">
            </div>
        </form>
    </div>
</div>


<?php
include "rodape.php";
?>