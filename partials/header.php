<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="profile navbar-brand btn btn-success" id="edit_profile" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $_SESSION['name'] . " " . $_SESSION['lastname'] ?></a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" userId="<?php echo $_SESSION['id'] ?>">
            <form action="" id="form-modal" >
              <div class="form-group" >
                <input type="hidden" value="<?php echo $_SESSION['id'] ?>" class="form-control" id="id">
              </div>
              <div class="form-group">
                <input type="text" value="<?php echo $_SESSION['name'] ?>" class="form-control" id="name">
              </div>
              <div class="form-group">
                <input type="text" value="<?php echo $_SESSION['lastname'] ?>" class="form-control" id="lastname">
              </div>

              <div class="modal-footer" id="btn-form">
                <button type="submit" class="btn btn-primary" id="btnEditProfile">Guardar Cambios</button>
              </div>


            </form>
          </div>

        </div>
      </div>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-danger" href="./back_end/sign_out.php" tabindex="-1" aria-disabled="true">Sign Out</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="inputSearch">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>