<!-- Image and text -->
<nav class="navbar fixed-top navbar-light bg-light navbar-mod">
    <a class="left-navbar-button collapsed" data-toggle="collapse" href="#login-ventana" aria-controls="login-ventana" aria-expanded="false">
        <div class="navbar-button-container-left">
            <i class="fas fa-user"></i>
        </div>
    </a>
    <a class="navbar-brand mx-auto" href="#">
        <img src="data:image/jpg;charset=utf-8;base64,<?php include 'controladores/bd_control/pagina_principal_bd/definir_logo.php'; ?>"   width="80" height="50" class="d-inline-block align-top" alt="">
    </a>
    <a href="carrito.php" class="right-navbar-button">
        <div class="navbar-button-container-right">
            <i class="fas fa-shopping-cart"></i>        
        </div>
    </a>
</nav>
<?php include 'componentes/login.php' ?>

