<?php
include('../back_end/db.php');

$id = $_SESSION['id'];

$query = "SELECT id_task, name_task, description_task FROM tasks where id_user = $id";
$result = mysqli_query($conn, $query);

$json = array();

while ($row = mysqli_fetch_array($result)) {
  $json[] = array(
    'id_user' => $row['id_user'],
    'id_task' => $row['id_task'],
    'name_task' => $row['name_task'],
    'description_task' => $row['description_task']
  );
}

$jsonString = json_encode($json);
echo $jsonString;
