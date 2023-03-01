<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup-Cryptex</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

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
			<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-250">
				<form class="login100-form validate-form " action="signupchk.php" method="post">
					<span class="login100-form-title p-b-20">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-20" data-validate="Name is required">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" placeholder="Type your name" pattern="[a-zA-Z\s]+" title="Name should contain only characters and whitespaces">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>


                    <div class="wrap-input100 validate-input m-b-20" data-validate = "Email ID is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Type your Email ID">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20" data-validate = "Mobile No. is required">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="phone" placeholder="Type your mobile no.">
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
								Sign Up
							</button>
						</div>
					</div>
					<div class="flex-col-c p-t-10">
					<?php
						if (isset($_GET['error']) && $_GET['error'] == 1) {
							echo "<p style='color:red'>Email already exists. Please Log In.</p>";
						}
                    ?>
					</div>
					<div class="flex-col-c p-t-15">
						<span class="txt1 p-b-17">
							Registered User?
						</span>

						<a href="login.php" class="txt2">
							Login
						</a>
					</div>
					
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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