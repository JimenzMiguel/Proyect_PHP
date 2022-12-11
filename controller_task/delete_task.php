<?php

include('../back_end/db.php');


if (isset($_POST['id'])) {
  $id_task  = $_POST['id'];
  $query = "DELETE FROM tasks WHERE id_task = $id_task ";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die('Error al eliminar la tarea') . mysqli_error($conn);
  }

  echo 'Tarea eliminada correctamente';
}
