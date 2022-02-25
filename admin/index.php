<?php 
session_start();
require 'config.php';
require '../functions.php';

// Artigo do painel de controle 
$conexion = conexion($bd_config);
comprovarSession();
// verificar conexao
if(!$conexion){
    header('location: ../error.php');
}
$posts = obtener_post($blog_config['post_por_pagina'], $conexion);



require '../views/admin_index.view.php';

?>