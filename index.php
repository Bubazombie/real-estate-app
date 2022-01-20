
<?php 
    require 'includes/functions.php';
    includeTemplate('header', $index = true); 
?>

    <main class="container section">
        <h1>Más sobre nosotros</h1>
        <div class="icons-aboutus">
            <div class="icon">
                <img src="build/img/icon1.svg" alt="icon seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet autem quo maiores consectetur
                    obcaecati officiis laborum qui doloremque, minus fugit fugiat impedit, possimus reprehenderit
                    quibusdam. Natus dolorum similique autem! Debitis.</p>
            </div>
            <div class="icon">
                <img src="build/img/icon2.svg" alt="icon Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet autem quo maiores consectetur
                    obcaecati officiis laborum qui doloremque, minus fugit fugiat impedit, possimus reprehenderit
                    quibusdam. Natus dolorum similique autem! Debitis.</p>
            </div>
            <div class="icon">
                <img src="build/img/icon3.svg" alt="icon A Tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet autem quo maiores consectetur
                    obcaecati officiis laborum qui doloremque, minus fugit fugiat impedit, possimus reprehenderit
                    quibusdam. Natus dolorum similique autem! Debitis.</p>
            </div>
        </div>
    </main>

    <section class="section container">
        <h2>Casas y Depas en Venta</h2>
        
        <?php
            $limit = 3;
            include 'includes/templates/adverts.php';
        ?>
            
        <div class="align-right">
            <a href="adverts.php" class="button-green">Ver Todas</a>
        </div>
    </section>

    <section class="image-contact">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el form de contacto y un asesor se pondrá en contact contigo a la brevedad</p>
        <a href="contact.php" class="button-yellow">Contáctanos</a>
    </section>

    <div class="container section section-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
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
                    <p class="informacion-meta">Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>
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
                    <p class="informacion-meta">Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle
                        vida a tu espacio.</p>
                </div>

            </article>
        </section>
        <section class="testimonials">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>El personal se comportó de una excelente forma, muy buena atención y la casa que me
                    ofrecieron cumple con todas mis expectativas.</blockquote>
                <p>- Fulano De Tal</p>

            </div>
        </section>
    </div>

<?php 
    includeTemplate('footer'); 
?>

