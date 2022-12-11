<?php
include('./back_end/db.php');

if (empty($_SESSION['id'])) {
  header('location: index.php');
}






?>

<!doctype html>
<html lang="en">

<head>
  <title>Home page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/style_page_home.css">
</head>

<body>
  <header id="navbar">
    <?php include('./partials/header.php') ?>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-9">
              <!-- <h1 id="title-home">Welcome To Page Home</h1> -->
            </div>
            <div class="col-md-4" id="menu-list">
              <ul class="list-group">
                <li class="list-group-item active" aria-current="true" id="title-menu"><a href="page_home.php" id="menu-nom">Menu Principal</a></li>
                <li class="list-group-item btn btn-warning"><a href="#" class="link-menu" id="task">Registrar Tarea</a></li>
                <li class="list-group-item btn btn-warning"><a href="#" class="link-menu" id="list-task">Lista de tareas</a></li>
                <li class="list-group-item btn btn-warning"><a href="#" class="link-menu" id="">A second item</a></li>
                <li class="list-group-item btn btn-warning"><a href="#" class="link-menu" id="">A second item</a></li>
              </ul>
            </div>
            <div class="col-sm-7" id="container-info">
              <?php include('./partials/carrousel_page_home.php') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>

    <!-- place footer here -->
  </footer>
  <!-- jQuery librarie -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <script src="./js/edit_profile.js" type="module"></script>
  <script src="./js/page_home.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>