<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.css">
	<link rel="stylesheet" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="css/util.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="branch_dash.php">
					<span class="login100-form-title p-b-32">
						Check your result here
					</span>
					<span class="txt1 p-b-11">
						Branch Code
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="branch_code" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Semester
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="integer" name="semester" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Check
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="main.js"></script>

</body>
</html>
