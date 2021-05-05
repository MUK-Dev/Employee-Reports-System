<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Submit Report</title>
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

		<section id="body">
			<h3 class="center">Submit Report</h3>

			<section id="form">
				<div class="row container" style="margin-bottom: 30px">
					<div class="col s12">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<form action="process.php" method="post" class="col s12">
										<!-- Report Text Field -->
										<div class="row">
											<div class="input-field col s12">
												<i class="material-icons prefix">mode_edit</i>
												<textarea
													id="icon_prefix2"
													class="materialize-textarea"
													name="report"
													required
												></textarea>
												<label for="icon_prefix2">Report</label>
											</div>
										</div>
										<!-- Name text field -->
										<div class="row">
											<div class="input-field col s12">
												<input
													id="name"
													type="text"
													class="validate"
													name="name"
													required
												/>
												<label for="name">Name</label>
											</div>
										</div>
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
										<!-- Date Picker -->
										<input
											type="text"
											class="datepicker"
											placeholder="Select Date"
											name="date"
											required
										/>
										<button
											type="submit"
											name="btn-save"
											class="btn-floating halfway-fab waves-effect waves-light btn-large pulse deep-purple lighten-3"
										>
											<i class="material-icons">thumb_up</i>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
    

		<script src="datepicker.js"></script>
	</body>
</html>
