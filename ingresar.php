<?php
include 'lectura.php';
$_SESSION["usuario"]->ingresar($_GET["ingresar"]);
header("Location: bancaUsuario.php");