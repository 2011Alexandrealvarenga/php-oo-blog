<?php 
require 'admin/config.php';
require 'functions.php';
$conexion = conexion($bd_config);
// se não tem conexao, direciona para o artigo error.php
if(!$conexion){
    // header('location: error.php');
    echo 'erro';
}

// require 'views/index.view.php';

// server tem valor e nao esta vazio e busqueda não esta vazio
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
    // ao buscar limpa os dados por segurança 
    $busqueda = limpiarDatos($_GET['busqueda']);
    $statement = $conexion->prepare("SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda");
    $statement->execute(array(':busqueda' => "%$busqueda%"));
    $resultados = $statement->fetchAll();

    // se a variavel resultado esta vazia entao nao tem resultados
    if(empty($resultados)){
        $titulo = 'Não foi encontrado resultado: '.$busqueda;
    }else{
        $titulo = 'Resultados da busca: '.$busqueda;
    }
}else{
    header('location: ' .RUTA. '/index.php');
}
require 'views/buscar.view.php';
?>