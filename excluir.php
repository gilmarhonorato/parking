<?php

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_excluir=mysqli_query($conecta , "DELETE FROM USUARIOS WHERE ID='$id' ");

if($sql_excluir ==true){

    echo "<script>
            
            alert('Usuário excluído com sucesso');
            window.location.href='usuarios.php';
            
            </script>";
} else {

    echo "<script>
            
            alert('Falha ao excluir Usuário ');
            window.location.href='usuarios.php';
            
            </script>";
}


?>