<?php 
session_start();
require 'config.php';
require '../functions.php';
comprovarSession();

$conexion = conexion($bd_config);
if(!$conexion){
    header('location: ../error.php');
}

// verifica es os dados foram enviados, ao editar, salva os dados alterados
if($_SERVER['REQUEST_METHOD'] == 'POST'){   
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $id = limpiarDatos($_POST['id']);
    $thumb_guardada = limpiarDatos($_POST['thumb-guardada']);
    $thumb = $_FILES['thumb'];
    // Verifica se a imagem esta vazia
    if(empty($thumb['name'])){
        $thumb = $thumb_guardada;
    }else{

        $arquivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tmp_name'], $arquivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }
    // atualizar no banco de dados
    $statement = $conexion->prepare(
        'UPDATE articulos SET 
        titulo = :titulo, 
        extracto = :extracto, 
        texto =:texto, 
        thumb =:thumb WHERE id =:id'
    );
    $statement->execute(array(
        ':titulo'=>$titulo,
        ':extracto'=>$extracto,
        ':texto'=>$texto,
        ':thumb'=>$thumb,
        ':id'=>$id
    ));
    header('location: '. RUTA .'/admin' );
}else{
    // se esta vazio enviar para a pagina /admin
    $id_articulo = id_articulo($_GET['id']);
    if(empty($id_articulo)){
        header('location: '.RUTA.'/admin');
    }


    $post = obtener_post_por_id($conexion, $id_articulo);
    // se nao tem post, envia para o /admin
    if(!$post){
        header('location: '.RUTA.'/admin' );
    }
    $post = $post[0];
}
require '../views/editar.view.php';
?>