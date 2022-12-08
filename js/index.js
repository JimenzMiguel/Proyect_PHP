

/* La palabra clave class crea una nueva clase y el método constructor se llama automáticamente
  cuando se crea una nueva instancia de la clase. */
class User {
  constructor(name, lastname, email, password) {
    this.name = name;
    this.lastname = lastname;
    this.email = email;
    this.password = password;
  }
}
/* Esta es una función que se ejecuta cuando se hace clic en el botón de inicio de sesión. */
// $("#card-form").submit(function (e) {
//   const url = "page_login.php";
//   const DataLogin = {
//     email_user: $("#email_user").val(),
//     password_user: $("#password_user").val(),
//   };

//   $.post(url, DataLogin, function (response) {
//     if(!response.error){
//       location.href = 'page_home.php'
//     }else{
//       console.log(response);
//     }
//   });
//   e.preventDefault();
// });

/* Esta es una función que se ejecuta cuando se hace clic en el botón de registro. */
$("#sign-up").click(function (e) {
  let container_form_signUp = $("#container_form_signUp");
  $("#card-form").hide();
  container_form_signUp.html(`
      <div class="card" id="card-form-sigUp">
        <form class="card-body" id="form-signUp">
          <h2 class="text-center" id="title">Sign Up</h2>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" id="name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Last Name" id="lastname">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" id="email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="password" id="password">
          </div>
          <button class="btn btn-success" type="submit" id="btn-sign-up" >Sign Up</button>
          <div id="links">
                <a href="">¡Ya tengo Cuenta!</a>
           </div>
        </form>
      </div>
    `);

  /* Creación de un nuevo usuario con los parámetros de nombre, apellido, email2 y contraseña2. */
  $("#card-form-sigUp").submit(function (e) {
    let name = $("#name").val();
    let lastname = $("#lastname").val();
    let email2 = $("#email").val();
    let password2 = $("#password").val();

    /* Creación de un nuevo usuario con los parámetros de nombre, apellido, email2 y contraseña2. */
    let UrlCreateUser = "back_end/create_user.php";
    let user = new User(name, lastname, email2, password2);

    if (name === "" && lastname === "" && email2 === "" && password2 === "") {
      $("#alert").html(`
        <div class="alert alert-danger alert-dismissible fade show" role="alert" >
        <strong>Error!</strong> Todos los campos son requeridos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        
        `);

      return false;
    } else {
      $.post(UrlCreateUser, user, function (response) {
        console.log(response);
      });
      $("#alert").html(`
        <div class="alert alert-info alert-dismissible fade show" role="alert" id="message-alert">
          <strong>Felicidades!</strong> Registro exitoso.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `);
    }
    $("#form-signUp").trigger("reset");
    e.preventDefault();
  });
  e.preventDefault();
});

