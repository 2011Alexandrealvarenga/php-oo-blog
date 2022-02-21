<?php 
require 'admin/config.php';
require 'functions.php';
$conexion = conexion($bd_config);
// se não tem conexao, direciona para o artigo error.php
if(!$conexion){
    // header('location: error.php');
    echo 'erro';
}


$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
// se nao tem posts mostra a pagina error.php
if(!$posts){
    header('location: error.php');
}
require 'views/index.view.php';


?>