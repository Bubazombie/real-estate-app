<?php 
    require 'includes/functions.php';
    includeTemplate('header'); 
?>

    <main class="container section text-centered">
        <h1>Guía para la decoración de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="image de la propiedad" loading="lazy">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>admin</span></p>

        <div class="resumen-propiedad">
            <p class="precio">$3.000.000</p>
            <ul class="icons-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icon_wc.svg" alt="icon wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icon_estacionamiento.svg" alt="icon estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icon_dormitorio.svg" alt="icon dormitorio">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero illum culpa quo commodi quasi magnam id
                velit cupiditate molestiae et minus vero iusto, vitae aspernatur itaque, unde accusamus nostrum tempora?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea repellendus earum aut, rerum deleniti modi
                odio adipisci provident. Distinctio necessitatibus, optio alias magnam non ratione veniam nisi
                assumenda. Blanditiis, optio!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aut soluta placeat, nostrum veniam
                aperiam reprehenderit quas quaerat odio maiores ullam in facere. Delectus officia maxime ullam eaque
                tempora dolorem?</p>
        </div>
    </main>

<?php 
    includeTemplate('footer'); 
?>