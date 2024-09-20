<?php
include "header.php";
?>
<section id="bloque-general">
    <section class="cabecera">
        <div class="iconos-header2">
            <span class="active">1<img src="media/flecha-derecha.svg" alt="flecha"></span>        </div>

        <div class="iconos-header2">
            <span>2<img src="media/flecha-derecha.svg" alt="flecha"></span>
        </div>

        <div class="iconos-header2">
            <span>3</span>
        </div>
    </section>
    <section id="bloque-contenido">
        <h2>Area Personal</h2>
        <div>
            <label for="pin">Cambiar Pin</label>
            <input type="password" name="modelo" id="pin"">
        </div>
        <div>
            <label for="ingresar">Ingresar</label>
            <input type="number" name="ingresar" id="ingresar">
        </div>
        <div>
            <label for="retirar">Retirar</label>
            <input type="number" name="retirar" id="retirar">
        </div>
        <div>
            <input type="submit" value="Enviar" id="enviar">
        </div>

    </section>
</section>
</body>
</html>