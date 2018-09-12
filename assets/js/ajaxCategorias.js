//Obtiene todas las categorias de una tienda y crea la página
(function ($) {
    $.fn.dibujaPaginaCategorias = function () {
        return this;
    };
})(jQuery);




// A $( document ).ready() block.
$(document).ready(function () {

    $.ajax({
//        // En data puedes utilizar un objeto JSON, un array o un query string
//        data: {"parametro1": "valor1", "parametro2": "valor2"},
//        //Cambiar a type: POST si necesario
//        type: "GET",
//        // Formato de datos que se espera en la respuesta
//        dataType: "json",
        // URL a la que se enviará la solicitud Ajax
        url: "script.php",
    })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    console.log("La solicitud se ha completado correctamente.");
                }

            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                if (console && console.log) {
                    console.log("La solicitud a fallado: " + textStatus);
                }
            });



});

