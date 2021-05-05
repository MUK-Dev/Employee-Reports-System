<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>All Reports</title>
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

		<section id="body">
          <h3 class="center">Reports</h3>
          <div class="container" style="width: 200px">
      			<ul class="collapsible">
      				<li>
      					<div class="collapsible-header">
      						<i class="material-icons">filter_drama</i>Filter Reports
      					</div>
      					<div class="collapsible-body">
      						<form action="home.php" method="post">
                      <input
											type="text"
											class="datepicker"
											placeholder="First Date"
											name="from_date"
											required
										/>
      							<p>From</p>
                      <input
											type="text"
											class="datepicker"
											placeholder="Second Date"
											name="to_date"
											required
										/>
      							<p>To</p>
      							<button
      								type="submit"
      								name="btn-filter"
      								class="waves-effect waves-light btn pulse deep-purple lighten-3"
      							>
      								Filter
      							</button>
      						</form>
      					</div>
      				</li>
      			</ul>
      		</div>

      <?php
        require_once('connection.php');
        $From_date = "";
        $To_date = "";
        if(isset($_POST['btn-filter'])){
          $From_date = mysqli_real_escape_string($conn,$_POST['from_date']);
          $To_date = mysqli_real_escape_string($conn, $_POST['to_date']);
        }
        if($From_date != "" && $To_date !=""){
          $sql = "SELECT * FROM reports WHERE date BETWEEN '$From_date' AND '$To_date' ORDER BY ts DESC";
        } else {
          $sql = "SELECT * FROM reports ORDER BY ts DESC";
        }
        $result = $conn->query($sql);
      ?>

      <!-- Reports Section -->
      <div class="container" >
        <ul class="collection" style="border: none" >
      <?php
        while($report=$result->fetch_assoc()){
          echo ("<li class='collection-item avatar z-depth-1'  style='margin: 20px;'>
          <i class='material-icons circle red'>person</i>
          <span class='title'>By: ".$report['name']." </span>
          <p>".$report['email']."</p>
          <p>".$report['date']."</p>
          <hr>
          <p>".$report['report']."</p>
        </li>");
        }
        ?>
        
      
        </ul>
      </div>

      
		</section>
    <script src="collapseable.js"></script>
    <script src="datepicker.js"></script>
		<script src="navbar.js"></script>
	</body>
</html>
