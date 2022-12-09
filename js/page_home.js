$(document).ready(function () {
  $("#table-list").hide();
  $("#task").click(function (e) {
    $("#container-info").html(
      `
        <div class="card " id="card-form-task">
          <form class="card-body" id="form-task">
            <h4 class="text-center">Nueva Tarea</h4>
            <div class="form-group" >
              <input class="form-control" type ="text" placeholder="Name Task"  id="name_task" name="name_task">
            </div>
            <div class="form-group">
              <input class="form-control" type ="text" placeholder="Description Task" id="description_task" name="description_task">
            </div>
            <button class="btn btn-primary" type="submit" id="btnTask">Registrar Tarea</button>
          </form>
        </div>
        `
    );

    /* Esta es una función que se ejecuta cuando se envía el formulario. */
    $("#card-form-task").submit(function (e) {
      const url = "controller_task/create_task.php";
      let DataForm = {
        name_task: $("#name_task").val(),
        description_task: $("#description_task").val(),
      };
      if (DataForm.name_task === "" && DataForm.description_task === "") {
        alert("Todos los campos son requeridos");
      } else {
        $.post(url, DataForm, function (response) {
          alert(response);
        });
      }
      $("#form-task").trigger("reset");
      e.preventDefault();
    });
    e.preventDefault();
  });

  $("#list-task").click(function (e) {
    const listaTask = () => {
      $.ajax({
        type: "GET",
        url: "controller_task/list_task.php",
        success: function (response) {
          let dataResponse = JSON.parse(response);
          let trList = "";
          let tasks = dataResponse.forEach((element) => {
            trList += `
                <tbody>
                  <tr>
                    <td>${element.name_task}</td>
                    <td>${element.description_task}</td>
                  </tr>
                </tbody>
          
                `;
          });

          $("#container-info").html(trList);
        },
      });
    };
    listaTask();

    e.preventDefault();
  });
});
