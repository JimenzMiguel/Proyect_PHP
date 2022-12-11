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

    /* Esta es una función que se ejecuta cuando se envía el formulario. */
    $("#card-form-task").submit(function (e) {
      const url = "controller_task/create_task.php";
      let DataForm = {
        name_task: $("#name_task").val(),
        description_task: $("#description_task").val(),
      };
      if (DataForm.name_task === "" || DataForm.description_task === "") {
        alert("Todos los campos son requeridos");
      }
      $.post(url, DataForm, function (response) {
        alert(response);
      });

      $("#form-task").trigger("reset");
      e.preventDefault();
    });
    e.preventDefault();
  });

  // $(location).attr("href", "controller_task/list_task.php", function(){});
  $("#list-task").click(function (e) {
    $("#container-info").html(`
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Name Task</th>
            <th scope="col">Description Task</th>
            <th class="text-center" scope="col" >Acciones</th>
            
          </tr>
        </thead>
        <tbody id="dataList">
        </tbody >
      </table>    
    `);
    /**
     * Hace una solicitud AJAX al servidor, que devuelve un objeto JSON, que luego se analiza y se
     * muestra en el HTML
     */
   
    const listaTask = () => {
      $.ajax({
        type: "GET",
        url: "controller_task/list_task.php",
        success: function (response) {
          let dataResponse = JSON.parse(response);
          let listData = document.getElementById("dataList");
          if (dataResponse.length === 0) {
            alert("No hay tareas para mostrar");
          } else {
            dataResponse.forEach((element) => {
              let trList = document.createElement("tr");
              trList.setAttribute("id_task", `${element.id_task}`);
              trList.innerHTML = `
                <td>${element.name_task}</td>
                <td>${element.description_task}</td>
                <td id="acciones"><button class="delete-task btn btn-danger" id="btn-delete">Eliminar</button><button class="btn btn-warning" id="btn-edit">Editar</button></td>

              `;
              listData.appendChild(trList);
            });
          }
        },
      });
    };
    listaTask();

    /**
     * La función deleteTask() es una función que se llama cuando el usuario hace clic en el botón
     * eliminar
     */
    function deleteTask() {
      $(document).on("click", ".delete-task", function () {
        if (confirm) {
          let url = "controller_task/delete_task.php";
          let element = $(this)[0].parentElement.parentElement;
          let id = $(element).attr("id_task");
          $.post(url, { id }, function (response) {
            window.location.reload("list_task.php");
            alert(response);
          });
        }
      });
    }
    deleteTask();

    e.preventDefault();
  });
});
