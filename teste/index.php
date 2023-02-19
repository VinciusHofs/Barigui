<?php
    include_once("connect.php");
    $comando = "SELECT * FROM marcas";
    $resultado = mysqli_query($conn,$comando);
    $marcas = array();
    while($cadaMa = mysqli_fetch_assoc($resultado)){
        array_push($marcas, $cadaMa);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ISSO</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js" type="text/javascript"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</head>

<body>
    <div class="day">
        DIAS 4, 5 E 6 DE DEZEMBRO
    </div>
    <br> <br>
    <div class="center">
        <div class="logo">
            <img src="logo.png">
        </div>
        &ensp;&ensp;&ensp;
        <form action="save.php" method="post">
            <div class="main">
                <div class="red">
                    <p>GARANTA SEU BÔNUS DE ATÉ
                    <p class="bold">R$ 10.000,00</p>
                    </p>
                </div>
                <input type="text" class="field" name="name" id="name" placeholder="Nome">
                <div class="line"></div>
                <input type="text" class="field" name="phone" id="phone" placeholder="Telefone com DDD" maxlength="11">
                <div class="line"></div>
                <input type="text" class="field" name="city" id="city" placeholder="Cidade">
                <div class="line"></div>
                <select class="brand" title="Marca" name="brand" id="brand">
                    <option value="valor1">Marca</option>
                    <?php
                        foreach($marcas as $item){ ?>
                        <option value="<?=$item['id']?>">  <?=$item['marca']?> </option>
                    <?php } ?>
                </select>
                <input type="submit" name="save" value="Salvar" class="button"></input>
            </div>
        </form>
    </div>
    <div class="extra">
        <div class="brand_logo">
            <img src="grupo.png"> &ensp;
            <img src="volkswagen.png"> &ensp;
            <img src="nissan.png"> &ensp;
            <img src="hyundai.png"> &ensp;
            <img src="chery.png">
        </div>
        <div class="marketing">
            <p class="bold">5 MILHÕES </p>
            <p>DE CRÉDITO PRÉ APROVADO</p>
        </div>
    </div>
    <div class="extra_2">
        <div class="marketing">
            <p class="msg">MILHARES DE OFERTAS</p>
        </div>
        <br>
        <div class="marketing">
            <p class="msg">VOCÊ PODERÁ LEVAR SEU CARRO NA HORA!</p>
        </div>
    </div>
    <div class="footer">
        <p class="isso">2020 © Todos os direitos reservados. Conheça nossa Política de Privacidade ! Este site foi feito
            com ♥ por &ensp; <img src="isso.png"></p>
    </div>
    <script>
        $('#phone').mask('(00)00000-0000');
    </script>
</body>

</html>