<?php

    include_once('conexao.php');

    $usuario= $_POST['txt_usuario'];
    $senha= $_POST['txt_senha'];

        /*Variavel que faz select na tabela usuarios, validando usuario e senha*/
        $sql_logar=mysqli_query($ligar, "SELECT * FROM USUARIOS WHERE usuario='$usuario' and senha='$senha' ");

        /*se os dados forem igual loga na pagina princicpalParking.html*/
        if (mysqli_num_rows($sql_logar) !=0) {

            header ('location:principalParking.html');
        }

        else{
            echo "<script>
            
            alert('Usuário não registrado ');
            window.location.href='index.html';
            
            </script>";
            
        }




?>