<?php 
function conexion($bd_config){
    try{
       $conexion = new PDO('mysql:dbname=blog;host=localhost','root','');
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

?>