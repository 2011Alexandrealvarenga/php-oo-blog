<?php  
session_start();
require 'admin/config.php';
require 'functions.php';

// verifica se os dados foram anviados
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);

    // se usuario e senha estao corretos, cria a sessao admin 
    if($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']){
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('location: '.RUTA. 'admin');
    }

}
require 'views/login.view.php';
?>