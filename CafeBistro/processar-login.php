<?php
require "conexao.php";
require "autenticacao.php";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $_POST["email"];
    $_POST["senha"];

    $login = new autenticacao($conn);
    $usuario = $login->verificarUsuario($email, $senha);

    if($usuario){
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: index.php");
        exist;
    } else{
        header("Location: login.php?erro=1");
    } 
}

?>
