<?php 
include('../back_end/db.php');

/* Seleccionando todos los datos de las tareas de la tabla y almacenándolos en la variable . */
$query = "SELECT * FROM tasks";
$result = mysqli_query($conn, $query);

/* Al verificar si la consulta no funciona, si no funciona, mostrará un mensaje de error. */
if(!$result){
  die('Error al cargar los datos').mysqli_error($conn);
}

/* Creando una matriz vacía. */
$json = array();  

/* Creación de un array con los datos de la base de datos. */
while($row = mysqli_fetch_array($result)){
  $json[] = array(
    'id_task'=> $row['id_task'],
    'name_task' => $row['name_task'],
    'description_task' => $row['description_task']
  );
}

/* Convertir la matriz en una cadena JSON. */
$jsonString = json_encode($json);
echo $jsonString;
