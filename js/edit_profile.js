$(document).ready(function () {
  $(document).on("click", ".profile", function () {
   $('#modal').html(`
  
 
   `);
  });

  $("#inputSearch").keyup(function (e) {
    let search = $("#inputSearch").val();
    console.log(search);
  });
});
