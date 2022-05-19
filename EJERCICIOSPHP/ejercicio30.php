<?php
session_start();

$_SESSION["usuario"]="añita<3";

$_SESSION["estatus"]="logueado";

echo "Sesion Iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."estatus: ".$_SESSION["estatus"];


?>