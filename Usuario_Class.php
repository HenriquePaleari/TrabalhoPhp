<?php

    class Usuario {

        public function Login($email, $senha){
            global $pdo;

            $sql = "SELECT * FROM Usuarios where email = :email and Senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0 ){
                
                $dado = $sql->fetch();

                $_SESSION ['iduser'] = $dado ['id'];

                return true;
            }else{
                return false;
            }


        }
    }


?>