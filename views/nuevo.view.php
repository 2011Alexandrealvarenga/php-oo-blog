<?php require 'header.php';?>
    <div class="contenedor">        
        <div class="post">
            <article>
                <h2 class="titulo"> Novo Artigo</h2>
                <!--  -->
                <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> " >
                    <input type="text" name='titulo' placeholder="titulo do artigo">
                    <input type="text" name="extracto" placeholder="Extracto do artigo">
                    <textarea name="texto" id="" cols="30" rows="10" placeholder="Texto do artigo"></textarea>
                    <input type="file" name='thumb'>
                    <input type="submit" value="Adicionar Artigo">
                </form>  
            </article>
        </div>        
    </div>
<?php require 'footer.php'; ?>