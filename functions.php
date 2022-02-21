<?php 
function conexion($bd_config){
    try{
       $conexion = new PDO('mysql:dbname=blog_practica;host=localhost','root','');
       return $conexion;
    }catch (PDOException $e){
        return false;    }
}
function limpiarDatos($datos){
    // limpar espaços em branco
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos =htmlspecialchars($datos);
    return $datos;
}
function pagina_actual(){   
    return isset($_GET['p']) ? (int)$_GET['p']:1;
}
function obtener_post($post_por_pagina, $conexion){
    $inicio = (pagina_actual () > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

?>