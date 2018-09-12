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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Bootstrap CSS -->
        <?php include './componentes/piezas/bootstrap-css.php'; ?>

        <!--Needed Css-->
        <?php include './componentes/piezas/font-awesome-css.php'; ?>
        <link rel="stylesheet" href="./assets/css/navbar.css">
        <link rel="stylesheet" href="./assets/css/login-ventana.css">
        <link rel="stylesheet" href="./assets/css/checkout.css">


        <title>PDV-Panineto</title>
    </head>


    <body>
        <!--Body -->
        <?php include './persistencia/db_config.php' ?>
        <?php include './componentes/navbar.php'; ?>
        <?php include './componentes/checkout.php' ?>





        <?php include './persistencia/db_config_close.php' ?>

        <!--jQuery first, then Popper.js, then Bootstrap JS -->
        <?php include './componentes/piezas/bootstrap-jquery-js.php'; ?>

        <!--Optional JavaScript -->

    </body>
</html>

<?php exit(); ?>