<?php
include('../back_end/db.php');

if (isset($_POST['name_task']) && isset($_POST['description_task'])) {
  $name_task = $_POST['name_task'];
  $description_task = $_POST['description_task'];

  $query = "INSERT INTO tasks(name_task, description_task) values('$name_task', '$description_task')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die('Error al registrar la tarea') . mysqli_error($conn);
  } else {
    echo ('Tarea registrada correctamente');
   
  }
}
