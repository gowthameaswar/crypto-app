<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cryptex</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/cryptologo.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(https://images.pexels.com/photos/8369836/pexels-photo-8369836.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-60">
				<form class="login100-form validate-form " action="loginchk.php" method="post">
					<span class="login100-form-title p-b-20">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Type your Email ID">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<div class="flex-col-c p-t-10">
					<?php
                    if (isset($_GET['error']) && $_GET['error'] == 1) {
                        echo "<p style='color:red'>Incorrect password. Please try again.</p>";
                    }elseif (isset($_GET['error']) && $_GET['error'] == 2){
						echo "<p style='color:red'>Email does not exist! Please Sign-Up</p>";
					}
                    ?>
					</div>
					<div class="flex-col-c p-t-15">
						<span class="txt1 p-b-17">
							New User?
						</span>

						<a href="signup.php" class="txt2">
							Sign Up
						</a>
					</div>
					
					</div>
				</form>
			</div>
		</div>
	</div>
	


	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>


	<script src="js/main.js"></script>

</body>
</html>