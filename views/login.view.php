<?php require 'header.php'; ?>
    <div class="contenedor">
    
        <div class="post">
            <article>
                <h2 class="titulo">Iniciar Sessão</h2>
                <form class="formulario" method='POST' action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name='usuario' placeholder="usuario">
                    <input type="password" name="password" placeholder="Senha">
                    <input type="submit" value="iniciar">
                </form>
                
            </article>
        </div>
    </div>

<?php require 'footer.php'; ?>