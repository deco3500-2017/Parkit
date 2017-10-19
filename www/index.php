<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/functions.js"></script>	
	
	<!-- Bootstrap + bootstrap dependancies -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="login-landing">
	<!-- Form Group for Login -->
	<div class="container" id="login-container">
		<div class="col-xs-12">
			<h1 class="text-center">Parkit.</h1>
			<form>
				<div class="form-group">
					<label class="" for="login-email">Email address:</label>
					<input type="email" class="form-control" id="login-email" placeholder=":">
				</div>
				<div class="form-group">
					<label class="" for="login-password">Password:</label>
					<input type="password" class="form-control" id="login-password" placeholder="">
				</div>

				<div class="row">
					<div class="col-xs-10" id="login-options">
						<!-- Hides current content and displays new content on same page to emulate single page app -->
						<a onclick="loadRegistration()" href="#">Signup</a>
						<br>
						<a href="#">Forgotten your Password?</a>
					</div>
					<div class="col-xs-2">
						<button onclick="mapRedirect()" type="submit" class="btn btn-default pull-right">Submit</button>
					</div>				
				</div>			
			</form> 
		</div>
	</div>

	<!-- Form Group for First Registration Step -->
	<div class="container text-center" id="registration-container">
		<h1 class="text-center">Your Details</h1>
		<form>
		<div class="form-group">
			<label class="sr-only" for="first-Name">First Name:</label>
			<input type="text" class="form-control" id="last-Name" placeholder="First Name:">
		</div>
		<div class="form-group">
			<label class="sr-only" for="last-Name">Last Name:</label>
			<input type="text" class="form-control" id="last-Name" placeholder="Last Name:">
		</div>
		<div class="form-group">
			<label class="sr-only" for="Username">Username</label>
			<input type="text" class="form-control" id="Username" placeholder="Username:">
		</div>
		<div class="form-group">
			<label class="sr-only" for="register-email">Email address:</label>
			<input type="email" class="form-control" id="register-email" placeholder="Email Address:">
		</div>
		<div class="form-group">
			<label class="sr-only" for="mobile-number">Mobile Number:</label>
			<input type="number" class="form-control" id="mobile-number" placeholder="Mobile Number:">
		</div>
		<div class="form-group">
			<label class="sr-only" for="register-password">Password:</label>
			<input type="password" class="form-control" id="register-password" placeholder="Password:">
		</div>
		<div class="form-group">
			<label class="sr-only" for="register-password-again">Password:</label>
			<input type="password" class="form-control" id="register-password-again" placeholder="Confirm Password:">
		</div>
		<button onclick="loadThanks()" type="submit" class="btn btn-default text-center">Next</button>
	</div>

	<!-- Thanking the user after signup -->
	<div class="container text-center" id="thanks-container">
		<h1>Thanks for signing up!</h1>
		<p>We'll need to get more details later, but for now you're good to go!</p>
		<p id="redirecting">Redirecting you automatically, or click <a onclick="loadOptions()">here</a>
	</div>

	<!-- First options on 'app' open -->
	<div class="container text-center" id="choice-container">
		<h1>Welcome</h1>
		<p>What would you like to do today?</p>
		<div class="row" id="choice-buttons">
			<div class="col-xs-6">
				<button onclick="mapRedirect()" class="btn btn-default">Rent a Carspace</button>
			</div>
			<div class="col-xs-6">
				<button class="btn btn-default">Lease out my Carspace</button>
			</div>
		</div>
	</div>

</body>

</html>