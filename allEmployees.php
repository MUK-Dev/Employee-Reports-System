<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Trying code</title>
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
		<section id="navigation">
			<nav>
				<div class="nav-wrapper deep-purple lighten-3">
					<a href="#" data-target="mobile-demo" class="sidenav-trigger"
						><i class="material-icons">menu</i></a
					>
					<a
						href="http://localhost/employee-reports/home.php"
						class="brand-logo center"
						><i class="material-icons large">featured_play_list</i></a
					>
				</div>
			</nav>

			<ul class="sidenav" id="mobile-demo">
				<li><a href="http://localhost/employee-reports/home.php">Home</a></li>
				<li>
					<a href="http://localhost/employee-reports/allEmployees.php"
						>All Employees</a
					>
				</li>
			</ul>
		</section>
		<h3 class="center">All Employees</h3>

    <?php
        require_once('connection.php');
        $sql = "SELECT * FROM users ORDER BY ts DESC";
        $result = $conn->query($sql) or die($conn->error);
      ?>

		<!-- All Cards -->
		<div class="container">
			<div class="row">
        <?php while($user=$result->fetch_assoc()){ ?>
				<!-- One Single Card -->
				<div class="col s12 m6">
					<div class="card">
						<div class="card-image center-align">
							<i class="material-icons large">person</i>
						</div>
						<div class="card-content">
							<div class="row center-align">
								<div class="col s6">
									<p><strong>First Name</strong><br /><?= $user['firstName']; ?></p>
								</div>
								<div class="col s6">
									<p><strong>Last Name</strong><br /><?= $user['lastName']; ?></p>
								</div>
							</div>
							<div class="row center-align">
								<div class="col s6">
									<p><strong>Email</strong><br /><?= $user['email']; ?></p>
								</div>
								<div class="col s6">
									<p><strong>Phone No</strong><br /><?= $user['phone']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- One Single Card -->
        <?php } ?>
			</div>
		</div>
		<!-- ---------------- -->

		<script src="navbar.js"></script>
	</body>
</html>
