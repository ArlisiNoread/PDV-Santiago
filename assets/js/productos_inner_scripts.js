function soloUnCheckBoxSeleccionado() {
    $('input[type=checkbox]').click(function () {
        if ($(this)[0].name === "producto") {
            var chks = document.getElementsByTagName('INPUT');
            for (i = 0; i < chks.length; i++) {
                //console.log(chks[i].name);
                chks[i].checked = false;

            }
            if (chks.length > 1) {
                $(this)[0].checked = true;


            }
        }
    });
}


$(function () {
    soloUnCheckBoxSeleccionado();
}
);

