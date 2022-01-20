<?php 
    require 'includes/functions.php';
    includeTemplate('header'); 
?>
    <main class="container section">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="image contact" loading="lazy">
        </picture>
        <h2>Llene el formulario de contacto</h2>

        <form class="form">
            <fieldset>
                <legend>Información personal</legend>

                <label for="name">Nombre</label>
                <input type="text" id="name" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Tu E-mail">

                <label for="telefono">Telefono</label>
                <input type="tel" id="telefono" placeholder="Tu Teléfono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o Compra:</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o presupuesto</label>
                <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Cómo desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contact-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contact-telefono">

                    <label for="contact-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contact-email">
                </div>
                <p>Si eligió teléfono, elija la fecha y la hora para ser contactado</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="button-green">
        </form>
    </main>

<?php 
    includeTemplate('footer'); 
?>