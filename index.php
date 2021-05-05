<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Welcome</title>
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
		<div id="welcome" class="valign-wrapper">
			<div class="container center-align">
				<h3>Welcome</h3>
				<br />
				<br />
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col s6">
						<a
							href="http://localhost/employee-reports/login.php"
							class="waves-effect waves-light btn btn-large deep-purple lighten-3 pulse"
							>Login</a
						>
					</div>
					<div class="col s6">
						<a
							href="http://localhost/employee-reports/register.php"
							class="waves-effect waves-light btn btn-large deep-purple lighten-3 pulse"
							>Register</a
						>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
