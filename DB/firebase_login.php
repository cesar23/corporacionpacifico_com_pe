<!DOCTYPE html>
 <html>
  <head>
   <meta charset="UTF-8">
   <title>Autentificación en Firebase</title>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="Sellegance - OpenCart Theme" />

    	 <script src="https://www.gstatic.com/firebasejs/3.6.2/firebase.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

       
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">  

  </head>

  <body>
    <div class="container">
      <input id="txtEmail" type="email" placeholder="Email">
      <input id="txtPassword" type="password" placeholder="Contraseña">
      <button id = "btnLogin" class="btn btn-action">Login</button>
      <button id = "btnSignUp" class="btn btn-secondary">Registrarse</button>
      <button id = "btnLogout" class="btn btn-action hide">Logout</button>
    </div>

<div>
   <button  id = "btn_VerificarUsuario" class="btn btn-action ">Verificar Usuario</button>
</div>
   <script src="app_login.js"></script>

  </body>

</html>
