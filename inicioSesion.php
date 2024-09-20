<?php
/*   1. Verificamos que los datos introducidos no estén en blanco  */
if (empty($_POST["usuario"]) || empty($_POST["pin"])) {
    // Verificamos que no estén vacíos
    echo "Debes indicar usuario y password";
} else {
    // Se envía a la funcion validarUsuario con los valores leídos, que comprobará si son correctos y  devuelverá true o false.
    if (validarUsuario($_POST["usuario"], $_POST["pin"])) {
        echo "Bienvenido " . $_POST["usuario"];
        header("Location:bancaUsuario.php");
    } else {
        header("Location:index.php");
    }
}


function validarUsuario($usuario, $pin)
{
    $listaUsuarios = ["Fidel" => "1234"];
    if (isset($listaUsuarios[$usuario]) && $listaUsuarios[$usuario] == $pin) {
        return true;
    } else {
        return false;
    }
}