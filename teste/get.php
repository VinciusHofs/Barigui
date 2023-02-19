<?php
    include_once('connect.php');

/*     $nomeusuario = '';
    $senha = '';
    $consultar = '';

    if(!empty($_POST['nomeusuario'])) {
        $nomeusuario = $_POST['nomeusuario'];
    }
    if(!empty($_POST['senha'])) {
        $senha = $_POST['senha'];
    }
    if(!empty($_POST['login'])) {
        $consultar = $_POST['login'];
    }

    if($consultar == 'Confirmar') {
        $res_consultar = "SELECT id, nome_usuario, senha_usuario FROM administracao WHERE nome_usuario = '$nomeusuario' && senha_usuario = '$senha'";
        $resp_inserir = mysqli_query($conn, $res_inserir);
    
        header('Location: table.php');
        die();
    } */

    if(isset($_POST['login'])) {
        $nomeusuario = $_POST['nomeusuario'];
        $senha = $_POST['senha'];
        
        $consulta = "SELECT id, nome_usuario, senha_usuario FROM administracao WHERE nome_usuario = '$nomeusuario' && senha_usuario = '$senha'";
        $resultado = mysqli_query($conn, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            $id_usuario = mysqli_fetch_assoc($resultado)['id'];
            session_start();
            $_SESSION['usuario'] = $id_usuario; 
            header("Location: table.php");
          }
      }
?>