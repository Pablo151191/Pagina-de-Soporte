<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina de Soporte</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>
<?php
// Puedes agregar cualquier lógica PHP aquí si es necesario
?>
<div class="flex-container">
    <div class="flex-slide home">
        <div class="flex-title flex-title-home">Inicio</div>
        <div class="flex-about flex-about-home"><p>Haga clic aquí para navegar a la sección de inicio del sitio web.</p></div>
    </div>
    <div class="flex-slide about">
        <div class="flex-title">Acerca de</div>
        <div class="flex-about"><p>Haga clic aquí para navegar a la sección Acerca de del sitio web</p></div>
    </div>
    <div class="flex-slide work">
        <div class="flex-title">Trabajos</div>
        <div class="flex-about">
            <p>Listado de fragmentos de trabajo relevantes:</p>
            <ul>
                <li>Instalación de Sistemas operativos</li>
                <li>Mantenimiento preventivo y correctivo</li>
                <li>Cambio de partes de hardware</li>
            </ul>
        </div>
    </div>
    <div class="flex-slide contact">
        <div class="flex-title">Contacto</div>
        <div class="flex-about">
            <p>Utilice el siguiente formulario de contacto</p>
            <form class="contact-form" method="post" action="contact.php">
                <p>Correo <input type="text" name="email"></p>
                <p>Comentarios <textarea name="comment" rows="5"></textarea></p>
                <p><input type="submit" value="Enviar Mensaje"></p>
            </form>
        </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/769286/jquery.waitforimages.min.js'></script>
<script src="./script/cards.js"></script>
</body>
</html>
