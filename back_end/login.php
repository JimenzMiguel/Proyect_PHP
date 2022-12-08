<?php

include('db.php');
if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = $conn->query("SELECT * FROM users WHERE email_user = '$email' and password_user = '$password'");
  if ($data = $sql->fetch_object()) {
    $_SESSION["id"] = $data->id_user;
    $_SESSION["name"] = $data->name_user;
    $_SESSION["lastname"] = $data->lastname_user;

    header('location: ../page_home.php');
  }
}
