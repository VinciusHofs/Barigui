<?php
include_once('connect.php');

$nome = '';
$telefone = '';
$cidade = '';
$marca = '';
$gravar = '';

if(!empty($_POST['name'])) {
    $nome = $_POST['name'];
}
if(!empty($_POST['phone'])) {
    $telefone = $_POST['phone'];
}
if(!empty($_POST['city'])) {
    $cidade = $_POST['city'];
}
if(!empty($_POST['brand'])) {
    $marca = $_POST['brand'];
}
if(!empty($_POST['save'])) {
    $gravar = $_POST['save'];
}

if($gravar == 'Salvar') {
    $res_inserir = "INSERT INTO inscricao(nome,tel,cidade,marca_carro) VALUES ('$nome','$telefone','$cidade','$marca')";
    $resp_inserir = mysqli_query($conn, $res_inserir);

    header('Location: end.php');
    die();
}

?>