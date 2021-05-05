<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
    <!-- Compiled and minified CSS -->
		<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- Icons link -->
  <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"
  />

  <!-- Style sheets -->
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" />
	</head>
	<body>
    <h3 class="center">Welcome Back</h3>

    <section id="form">
      <div class="row container" style="margin-bottom: 50px">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <div class="row">
                <form action="loginUser.php" method="post" class="col s12">
                  
                  <!-- Email Text Field -->
                  <div class="row">
                    <div class="input-field col s12">
                      <input
                        id="email"
                        type="email"
                        class="validate"
                        name="email"
                        required
                      />
                      <label for="email">Email</label>
                    </div>
                  </div>

                  <!-- Password -->
                  <div class="row">
                    <div class="input-field col s12">
                      <input
                        id="pass"
                        type="password"
                        class="validate"
                        name="pass"
                        required
                      />
                      <label for="pass">Password</label>
                    </div>
                  </div>
                  
                  <button
                    type="submit"
                    name="btn-login"
                    class="btn-floating halfway-fab waves-effect waves-light  deep-purple lighten-3 btn-large pulse"
                  >
                    <i class="material-icons">check</i>
                  </button>
                </form>
                <script src="index.js"></script>
  </body>
</html>
