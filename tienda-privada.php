<?php
$status = session_status();
if ($status == PHP_SESSION_NONE) {
    //There is no active session
    session_start();
}
?>


<?php
if (!isset($_GET["tienda"])) {
    header("Location: ./home.php", true, 301);
}
//echo '¡Hola ' . htmlspecialchars($_GET["tienda"]) . '!';
?>


<?php
if (!isset($_GET["categoria"])) {
    ?>
    <!doctype html>
    <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <?php include './componentes/piezas/bootstrap-css.php'; ?>

            <!-- Needed Css-->
            <?php include './componentes/piezas/font-awesome-css.php'; ?>
            <link rel="stylesheet" href="./assets/css/navbar.css">
            <link rel="stylesheet" href="./assets/css/login-ventana.css">
            <link rel="stylesheet" href="./assets/css/productos.css">

            <?php include './componentes/piezas/clases-basicas.php'; ?>

            <title>PDV-Panineto</title>
        </head>


        <body>
            <!-- Body -->
            <?php include './persistencia/db_config.php' ?>
            <?php include './componentes/navbar.php'; ?>
            <?php include './componentes/productos.php'; ?>





            <?php include './persistencia/db_config_close.php' ?>

            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <?php include './componentes/piezas/bootstrap-jquery-js.php'; ?>

            <!-- Optional JavaScript -->


        </body>
    </html>


    <?php
} else {
    //Selector de Productos
    ?>
    <!doctype html>
    <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <?php include './componentes/piezas/bootstrap-css.php'; ?>

            <!-- Needed Css-->
            <?php include './componentes/piezas/font-awesome-css.php'; ?>
            <link rel="stylesheet" href="./assets/css/navbar.css">
            <link rel="stylesheet" href="./assets/css/login-ventana.css">
            <link rel="stylesheet" href="./assets/css/productos.css">
            <link rel="stylesheet" href="./assets/css/check-footer.css">
            <link rel="stylesheet" href="./assets/css/flotador-ingredientes.css">


            <?php include './componentes/piezas/clases-basicas.php'; ?>

            <title>PDV-Panineto</title>
        </head>


        <body>
            <!-- Body -->
            <?php include './persistencia/db_config.php' ?>
            <?php include './componentes/navbar.php'; ?>
            <?php include './componentes/productos_inner.php'; ?>
            <?php include './componentes/check-footer.php'; ?>
            <?php include './componentes/flotador-ingredientes.php'; ?>





            <?php include './persistencia/db_config_close.php' ?>

            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <?php include './componentes/piezas/bootstrap-jquery-js.php'; ?>

            <!-- Optional JavaScript -->
            <script src="assets/js/productos_inner_scripts.js"></script>
            <script src="assets/js/agregar_al_carrito.js"></script>

        </body>
    </html>
    <?php
}
?>

<?php exit(); ?>?>
