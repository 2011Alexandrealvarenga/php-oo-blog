<?php 
session_start();

session_destroy();
// se tem um array em branco que quer dizer que esta encerrando
$_SESSION = array();

header('location: ../');
die();
?>