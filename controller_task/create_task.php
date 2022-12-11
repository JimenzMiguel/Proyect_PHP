<?php
include('../back_end/db.php');

/* Obtener los datos del formulario y almacenarlos en variables. */
$id = $_SESSION['id'];
$name_task = $_POST['name_task'];
$description_task = $_POST['description_task'];

/* Comprobando si las variables están configuradas y si lo están, las está insertando en la base de
datos. */
if (isset($id) && isset($name_task) && isset($description_task)) {
  $sql = ("INSERT INTO tasks(name_task, description_task, id_user) values('$name_task', '$description_task', $id)");
  $result = mysqli_query($conn, $sql);

  /* Comprobando si el resultado es verdadero o falso. Si es falso, mostrará un mensaje de error. Si es
  cierto, mostrará un mensaje de éxito. */
  if (!$result) {
    die('Erroar al guardar la tarea') . mysqli_error($conn);
  }
  echo 'Tarea guardada exitosamente';
}
