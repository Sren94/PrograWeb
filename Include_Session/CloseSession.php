<?php
session_start();

// Deshabilitar la cache de sesión
session_cache_limiter('nocache');

// Eliminar los datos de la sesión
$_SESSION = array();

// Eliminar la cookie de sesión
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Destruir la sesión
session_destroy();
header('Location: /ProyectoWeb');
?>
