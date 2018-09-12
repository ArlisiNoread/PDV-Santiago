<?php

$status = session_status();
if ($status == PHP_SESSION_NONE) {
    //There is no active session
    session_start();
}

//Creando Variables Locales
if (!isset($_SESSION['user_name'])) {
    $_SESSION['user_name'] = '';
}

if (!isset($_SESSION['user_loged'])) {
    $_SESSION['user_loged'] = FALSE;
}

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

?>