<?php
$status = session_status();
if ($status == PHP_SESSION_NONE) {
    //There is no active session
    session_start();
}


//echo var_dump($_POST);
//array_push($_SESSION["carrito"], $_POST["id"]);
//array_push($ _SESSION["carrito"], 'test');
array_push($_SESSION['carrito'], $_POST["id"]);
echo 'Existe: ' . isset($_SESSION["carrito"]);
echo 'Carrito: ' . var_dump($_SESSION["carrito"]);
//echo var_dump($_SESSION);
?>

<?php exit(); ?>?>
