<?php 
require '../views/header.php';
?>
    <div class="contenedor">
        <h2>Painel de Controle</h2>
        <a href="nuevo.php" class="btn">Novo Post</a>
        <a href="cerrar.php" class="btn">Encerrar Sessão</a>
        <?php foreach($posts as $post): ?>
        <div class="post">
            <article>
                <h3 class="titulo"><?php echo $post['id'] . '.- '.$post['titulo']; ?> </h3>
                <a href="editar.php?id=<?php echo $post['id'];?> ">Editar</a>
                <a href="../single.php?id=<?php echo $post['id']; ?>">Ver </a>
                <a href="../admin/borrar.php?id=<?php echo $post['id'];?>">Apagar</a>

            </article>
        </div>
        <?php endforeach; ?>
        <?php require '../paginaction.php'; ?>
    </div>
<?php require '../views/footer.php'; ?>