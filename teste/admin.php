<?php 
  include_once('connect.php');
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
    <form action="get.php" method="post">
        <div class="main_admin">
            <div class="red">
             <p class="bold">LOGIN</p>
            </div>
            <input type="text" class="field" name="nomeusuario" id="nomeusuario" placeholder="Usuário">
            <div class="line"></div>
            <input type="text" class="field" name="senha" id="senha" placeholder="Senha">
            <div class="line"></div>
            <input type="submit" name="login" id="login" value="Confirmar" class="button"></input>
        </div>
    </form>
</body>

</html>