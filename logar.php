<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

   require "conexao.php";
   require "Usuario_Class.php"; 

    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

   if ($u->Login($email, $senha) == true){
        if(isset($_SESSION['iduser'])){
        header("Location: index.php");
        }else{
            header("Location: login.php");
        }
    } else {
        header("Location: login.php");
    }

} else {

    header("Location: login.php");
};

?>