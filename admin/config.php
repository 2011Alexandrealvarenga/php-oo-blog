<?php 
// caminho do glog
define('RUTA','http://localhost/PHP/php-oo-blog/');

// guarda todas as informações do banco
$bd_config = array(
    'basedatos' =>'blog',
    'usuario'=>'root',
    'pass' =>'',

);
$blog_config = array(
    'post_por_pagina' => '2',
    'carpeta_imagenes' =>'imagenes/'
);
$blog_admin = array(
    'usuario' => 'carlos',
    'password' => '123'
);

?>