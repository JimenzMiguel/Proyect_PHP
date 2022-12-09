$(document).ready(function () {
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
    $("#container-info").html(`
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

    `);
    e.preventDefault();
  });
});
