$(document).ready(function () {
  /* Esta es una función jQuery que se llama cuando se envía el formulario. Está utilizando el método
  de publicación de jQuery para enviar los datos al back-end y actualizar los datos de perfil del usuario logueado. */
  $("#form-modal").submit(function (e) {
    let url = "back_end/update_user.php";
    let name = $("#name").val();
    let lastname = $("#lastname").val();
    let element = $(this)[0].parentElement;
    let id = $(element).attr("userId");
    $.post(url, { id, name, lastname }, function (response) {
      alert(response);
    });
    e.preventDefault();
  });
  /* Una función jQuery que se llama cuando el usuario escribe algo en la entrada. */
  $("#inputSearch").keyup(function (e) {
    let search = $("#inputSearch").val();
    console.log(search);
  });
});
