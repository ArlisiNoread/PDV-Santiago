<?php
include 'controladores/bd_control/pagina_principal_bd/definir_categorias_productos.php';
//$arregloDeCategorias_Productos
?>

<div class="contenedor-productos">


    <?php
    for ($i = 0; $i < count($arregloDeCategorias_Productos); $i++) {
        ?>
        <div class="row">
            <div class="col-2">
                <input type="checkbox" name="producto" value="<?php echo $arregloDeCategorias_Productos[$i][0] ?>">   
            </div>
            <div class="col-8">
                <p><?php echo $arregloDeCategorias_Productos[$i][1] ?></p>
            </div>
            <div class="col-2">
                <p>$<?php echo $arregloDeCategorias_Productos[$i][2] ?></p>
            </div>
        </div>
        <?php
    }
    ?>


    <?php
//    for ($i = 0; $i < count($arregloDeCategorias); $i++) {
//        echo '<a href="tienda-privada.php?tienda=Panineto&categoria='. $arregloDeCategorias[$i][1] . '">';
//        $image_base64 = base64_encode($arregloDeCategorias[$i][2]);
//        $image = 'data:image/png;base64,' . $image_base64;
//        echo '<div class="container categoria" style="background-image:url(' . $image . ')">';
//        echo '<h1>' . $arregloDeCategorias[$i][1] . '</h1>';
//        echo '</div>';
//        echo '</a>';
//    }
    ?>
</div>