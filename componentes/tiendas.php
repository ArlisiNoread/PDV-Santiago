<div class="container contenedor-tiendas">
    <?php include 'controladores/bd_control/pagina_principal_bd/definir_tiendas.php' ?>
    <?php
    //$arregloDeArreglosTiendas Variable que porta las tiendas
    //Se imprimen tercias de tiendas
    $i = 0;
    echo '<div class="row">';
    while ($i < count($arregloDeArreglosTiendas)) {
        echo '<a href="tienda-privada.php?tienda=' . $arregloDeArreglosTiendas[$i][1] . '">';
        echo '<div class="col-4">
                <div class="tienda-thumbnail">
                    <img class="img-tienda-thumbnail" src="data:image/jpg;charset=utf-8;base64,' . base64_encode($arregloDeArreglosTiendas[$i][3]) . '">
                </div>
              </div>';
        echo '</a>';
        $i++;
    }
    echo '</div>';
    ?>


</div>
