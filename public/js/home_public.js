/* validacion de formularios */
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

/* texto de ayuda flotante */
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

/* validacion codigo de barras */
/*var formulario = document.getElementById("form");
var codigo = document.getElementById("codigo_barras");
if (codigo.length != null){
    codigo.submit();
}
$("#codigo_barras").on('change', function() {
    if($(this).val().length != 0) {
        $(this).trigger('submit');
        keypress
    }
}); */

/* validacion entradas */
$(function () {
    $("#identificacion").on('keypress',
        function (e) {
            if (e.which == 13) {
                $("#nombres_entrada")
                    .load($("#nombres_entrada").attr('src').replace('#',$(this).val()), function () {
                        $("[name='temperatura']").focus();
                        $("[name='btn-registrar']");
                    });

                return false;
            }
            $("#nombres_entrada").empty();
        }
    );
    
});
/* fin validacion entradas */


