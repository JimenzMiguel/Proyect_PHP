<?php

include('db.php');


$id = $_SESSION['id'];
$name = $_POST['name'];
$lastname =  $_POST['lastname'];

$query = "UPDATE users SET name_user = '$name', lastname_user = '$lastname' WHERE id_user = $id";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Error al editar la informacion');
}
echo 'Usuario actualizado correctamente';
