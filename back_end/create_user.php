<?php


include('db.php');


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
// $passHash = password_hash($password, PASSWORD_BCRYPT);
// password_verify($password, $passHash);
if (isset($name) && isset($lastname) && isset($email) && isset($password)) {
  $query = "INSERT INTO users(name_user, lastname_user, email_user, password_user) values('$name', '$lastname', '$email', '$password ')";

  $result = mysqli_query($conn, $query);



  if (!$result) {
    die('Error al guardar el usuario') . mysqli_error($conn);
  } else {
    echo ('Usuario creado correctamente');
  }
}
