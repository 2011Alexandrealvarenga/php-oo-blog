<?php 
require 'admin/config.php';
require 'functions.php';
$conexion = conexion($bd_config);
// se não tem conexao, direciona para o artigo error.php
if(!$conexion){
    header('location: error.php');
}

obtener_post();

require 'views/index.view.php';


?>