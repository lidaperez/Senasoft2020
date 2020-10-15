/**
 * 
 */

$("#id_centro").on('change', function () {
    $("#id_ficha").empty();
    if ($(this).val().length == 0) {
      return false;
    } 
    else {
      $("#id_ficha")
        .load($("#id_ficha").attr('src').replace('#', $(this).val()), function () {
          $("#id_ficha").prepend($("<option/>").attr({ selected: true, disabled: true }).html('Seleccione Ficha de Formación...'))
        });
    }
  });