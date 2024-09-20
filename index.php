<?php
// Insertamos la cabecera
include "header.php";
?>
<section id="bloque-general">
    <section class="cabecera">
        <div class="iconos-header2">
            <span class="active">1<img src="media/flecha-derecha.svg" alt="flecha"></span>
        </div>

        <div class="iconos-header2">
            <span>2<img src="media/flecha-derecha.svg" alt="flecha"></span>
        </div>

        <div class="iconos-header2">
            <span>3</span>
        </div>
    </section>
    <section id="bloque-contenido">
        <h2>Iniciar Sesión</h2>
        <p>Por favor, ingrese sus datos para iniciar sesión:</p>

        <form action="inicioSesion.php" method="POST">
            <div class="contenido-form">
                <div class="bloque-datos bloque_log">
                    <label for="usuario"></label>
                    <input class="datos" type="text" name="usuario" id="usuario" placeholder="Usuario" required>
                </div>
                <div class="bloque-datos bloque_log">
                    <label for="pin"></label>
                    <input class="datos" type="password" placeholder="Contraseña" id="pin" name="pin" required>
                </div>
            </div>
            <div>
                <input class="boton" type="submit" value="Siguiente" id="enviar">
                <input type="reset" value="Limpiar" class="boton">
            </div>
        </form>
    </section>
</section>
</body>
</html>