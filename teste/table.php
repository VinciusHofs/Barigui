<?php
    include_once('connect.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table  border="1" class="table">
        <?php

        $comando = "SELECT * FROM inscricao";

        $resultado = mysqli_query($conn, $comando);
        $dado=array();

        while ($cadaimovel = mysqli_fetch_assoc($resultado)){
            array_push($dado,$cadaimovel);
        }

        foreach ($dado as $item){
            ?>
            <tr>
                <td>Nome: <?=$item['nome']?></td>
                <td>Telefone: <?=$item['tel']?></td>
                <td>Cidade: <?=$item['cidade']?></td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>