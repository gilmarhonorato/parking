<?php
    /*chama conexao com o banco*/
    include_once('conexao.php');

    /*valido se o usuario vai digitar usuario e senha, se digitar jogo para index.html
    if(empty($_POST['txt_usuario']) || empty($_POST['txt_senha'])) {
        header('Location: index.html');
        exit();
    }*/

    $usuario= $_POST['txt_usuario'];
    $senha= $_POST['txt_senha'];

        /*Variavel que faz select na tabela usuarios, validando usuario e senha*/
        $sql_logar=mysqli_query($conecta, "SELECT * FROM USUARIOS WHERE usuario='$usuario' and senha='$senha' ");

        /*se os dados forem igual loga na pagina princicpalParking.html*/
        if (mysqli_num_rows($sql_logar) !=0) {

            header ('location:usuarios.html');
        }

        else{
            echo "<script>
            
            alert('Usuário não registrado ');
            window.location.href='index.html';
            
            </script>";
            
        }




?>