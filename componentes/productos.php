<?php
include 'controladores/bd_control/pagina_principal_bd/definir_categorias.php';
//$arregloDeCategorias
?>

<div class="contenedor-productos">

    <?php
    for ($i = 0; $i < count($arregloDeCategorias); $i++) {
        echo '<a href="tienda-privada.php?tienda=Panineto&categoria='. $arregloDeCategorias[$i][0] . '">';
        $image_base64 = base64_encode($arregloDeCategorias[$i][2]);
        $image = 'data:image/png;base64,' . $image_base64;
        echo '<div class="container categoria" style="background-image:url(' . $image . ')">';
        echo '<h1>' . $arregloDeCategorias[$i][1] . '</h1>';
        echo '</div>';
        echo '</a>';
    }
    ?>
</div>