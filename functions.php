<?php 
function conexion($bd_config){
    try{
       $conexion = new PDO('mysql:dbname='.$bd_config['basedatos'].';host=localhost','root','');
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
    return ($_GET['p']);
}
function obtener_post($post_por_pagina, $conexion){

    $inicio = (pagina_actual () > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
}

?>