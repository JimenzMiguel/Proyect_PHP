<?php
include('./back_end/db.php');

if (isset($_SESSION['id'])) {
  header('location: page_home.php');
}

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = $conn->query("SELECT * FROM users WHERE email_user = '$email' and password_user = '$password'");
  if ($data = $sql->fetch_object()) {
    $_SESSION["id"] = $data->id_user;
    $_SESSION["name"] = $data->name_user;
    $_SESSION["lastname"] = $data->lastname_user;

    header('location: page_home.php');
  }
} else {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style/index-style.css" />
  <link rel="stylesheet" href="./style/style_sign_up.css">
</head>

<body id="container">
  <header></header>
  <main class="container">
    <div class="row">
      <div id="alert"></div>
      <div class="card" id="card-form">
        <div class="card-body">
          <form id="form" method="POST" action="index.php">
            <h1 id="title">Welcome</h1>
            <div class="form-group">
              <input type="hidden" class="form-control" id="id_user" name="id">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email" id="email_user" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" id="password_user" name="password">
              <button class="btn btn-success" id="btn-login" type="submit" name="btn-login">Login</button>
              <div id="links">
                <a href="">¿Perdiste tu contraseña?</a>
                <a href="#" id="sign-up">¿No tiene cuenta? Registrate</a>
              </div>
          </form>
        </div>
      </div>
    </div>
    <div id="container_form_signUp">

    </div>

  </main>
  <footer>

  </footer>
  <!-- jQuery librarie -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <script src="./js/index.js" type="module"></script>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>