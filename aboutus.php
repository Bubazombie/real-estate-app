<?php 
    require 'includes/functions.php';
    includeTemplate('header'); 
?>
    <main class="container section">
        <h1>Conoce sobre nosotros</h1>
        <div class="content-aboutus">
            <div class="image">
                <picture>
                    <source srcset="build/img/aboutus.webp" type="image/webp">
                    <source srcset="build/img/aboutus.jpg" type="image/jpeg">
                    <img src="build/img/aboutus.jpg" alt="sobre aboutus" loading="lazy">
                </picture>
            </div>
            <div class="text-aboutus">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quis corporis a impedit dolorem rem
                    earum consequuntur obcaecati iure, neque voluptatem architecto minima! Aliquid fugiat autem, velit
                    iusto accusantium quidem!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae ipsa itaque hic quia, dolore placeat
                    temporibus fugit explicabo maiores cum modi quaerat doloremque dignissimos molestiae quibusdam velit
                    ut tenetur sit.</p>
            </div>
        </div>
    </main>
    <section class="container section">
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
    </section>

<?php 
    includeTemplate('footer'); 
?>