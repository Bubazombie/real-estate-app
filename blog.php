<?php 
    require 'includes/functions.php';
    includeTemplate('header'); 
?>
    <main class="container section content-centered">
        <h1>Nuestro Blog</h1>
        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="text entry blog">
                </picture>
            </div>
            <div class="text-entry">
                <a href="entry.php">
                    <h4>Terraza en el techo de tu casa</h4>
                </a>
                <p>Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando
                    dinero </p>
            </div>


        </article>
        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="text entry blog">
                </picture>
            </div>

            <div class="text-entry">
                <a href="entry.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                <p>Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle
                    vida a tu espacio.</p>
            </div>

        </article>
        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="text entry blog">
                </picture>
            </div>
            <div class="text-entry">
                <a href="entry.php">
                    <h4>Terraza en el techo de tu casa</h4>
                </a>
                <p>Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando
                    dinero </p>
            </div>


        </article>
        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="text entry blog">
                </picture>
            </div>

            <div class="text-entry">
                <a href="entry.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                <p>Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle
                    vida a tu espacio.</p>
            </div>

        </article>
    </main>

<?php 
    includeTemplate('footer'); 
?>