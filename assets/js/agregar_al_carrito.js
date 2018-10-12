function aparecerCajaFlotadoraDeIngredientes() {
    $(".flotador-ingredientes").css({
        "top": "20%"});
    return;

}


function desaparecerCajaFlotadoraDeIngredientes() {
    $(".flotador-ingredientes").css({
        "top": "150%"});
    return;
}


function limpiarCajaFlotadoraDeIngredientes() {
    $(".lista-ingredientes-generada-row").empty();
    return;
}

function imprimirCajaFlotadoraDeIngredientes(arregloDeIngredientes) {
    for (var i = 0; i < arregloDeIngredientes.length; i++) {
        $(".lista-ingredientes-generada-row").append(
                '<div class="col-6">' +
                '<label class>' +
                '<input type="checkbox" name="ingrediente" value="' + arregloDeIngredientes[i][0] + '">' +
                arregloDeIngredientes[i][1].toString('utf-8') +
                '</label>' +
                '</div>'.toString('utf8')
                );

    }
    return;
}

function llenarCajaFlotadoraDeIngredientesConAjax(id_producto) {
    if (!id_producto) {
        //En caso de que id_producto sea null
        return;
    }
    console.log(id_producto);
    var arregloDeIngredientes;
    $.ajax({
        type: 'POST',
        url: 'controladores/actualizar_lista_ingredientes.php',
        data: {'id_producto': id_producto},
        contentType: "application/json; charset=utf-8",
        traditional: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        },
        success: function (data) {
            console.log('Comunicación exitosa');
            console.log(data);
            arregloDeIngredientes = JSON.parse(data);
            console.log(arregloDeIngredientes) ;
            imprimirCajaFlotadoraDeIngredientes(arregloDeIngredientes);

        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });



    return;
}

function actualizarCarritoConAjax(searchIDs) {
    $.ajax({
        type: 'POST',
        url: 'controladores/actualizar_carrito.php',
        data: {'id': searchIDs.get()[0]},
        contentType: "application/json; charset=utf-8",
        traditional: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        },
        success: function (data) {
            console.log('Comunicación exitosa');
            console.log(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
    return;
}

function busquedaDeInputs() {
    var searchIDs = $('input:checked').map(function () {

        return $(this).val();

    });
//    console.log(searchIDs.get());
//    console.log(JSON.stringify(searchIDs.get()[0]));
//    if (searchIDs.get().length !== 0) {
//        actualizarCarritoConAjax(searchIDs);
//    } else {
//        console.log('Es null');
//    }
    return searchIDs;
}


$(document).ready(function () {
    $(document).on('click', '#carrito', function () {
        console.log('Click Detectado');
        //busquedaDeInputs();
        aparecerCajaFlotadoraDeIngredientes();
        limpiarCajaFlotadoraDeIngredientes();
        var productoID = busquedaDeInputs();
        console.log('Busqueda de inputs: ' + productoID[0]);
        llenarCajaFlotadoraDeIngredientesConAjax(productoID[0]);


    });

    $(document).on('click', '#boton-cerrado-flotador-ingredientes', function () {
        console.log('Click Detectado');
        desaparecerCajaFlotadoraDeIngredientes();

    });

});