<?php

   include_once('conexao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css" content="width=device-width,initial-scale=1.0">
    <title>Usuários</title>

</head>

<body>

<table rules="all" >

<thead>
    <tr>
    <th>Usuário</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Permissão</th>
    <th>Data Cadastro</th>
    </tr>
</thead>

<tbody>

<?php 
$sql_usuario=mysqli_query($conecta, "SELECT * FROM USUARIOS");
$sql_total=mysqli_num_rows($sql_usuario);

while($linha=mysqli_fetch_array($sql_usuario)){
    ?>
    <tr>
    <td> <?= $linha[3] ?> </td>
    <td> <?= $linha[1] ?> </td>
    <td> <?= $linha[2] ?> </td>
    <td> <?= $linha[4] ?> </td>
    <td> <?= $linha[6] ?> </td>

    <td> <a href="excluir.php?codigo=<?= $linha[0] ?> ">Excluir</a> </td>
    <td> <a href="editar.phpcodigo=<?= $linha[0] ?>   ">Editar</a> </td>
    </tr>

    <?php } ?>

    <tr> <td colspan="5"> Total: <?=$sql_total ?>  </td></tr>

</tbody>

</table>
    
</body>

</html>