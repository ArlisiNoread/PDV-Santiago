<?php
$status = session_status();
if ($status == PHP_SESSION_NONE) {
    //There is no active session
    session_start();
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!--Required meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Bootstrap CSS -->
        <?php include './componentes/piezas/bootstrap-css.php'; ?>

        <!--Needed Css-->
        <?php include './componentes/piezas/font-awesome-css.php'; ?>
        <link rel="stylesheet" href="./assets/css/navbar.css">
        <link rel="stylesheet" href="./assets/css/login-ventana.css">
        <link rel="stylesheet" href="./assets/css/promociones.css">
        <link rel="stylesheet" href="./assets/css/tiendas.css">

        <?php include './componentes/piezas/clases-basicas.php'; ?>

        <title>PDV-Panineto</title>
    </head>


    <body>
        <!--Body -->
        <?php include './persistencia/db_config.php' ?>
        <?php include './componentes/navbar.php'; ?>
        <?php include './componentes/promociones.php' ?>
        <?php include './componentes/tiendas.php' ?>




        <?php include './persistencia/db_config_close.php' ?>

        <!--jQuery first, then Popper.js, then Bootstrap JS -->
        <?php include './componentes/piezas/bootstrap-jquery-js.php'; ?>

        <!--Optional JavaScript -->

    </body>
</html>

<?php exit(); ?>