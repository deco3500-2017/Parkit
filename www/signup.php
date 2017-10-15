<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css">	
	
	<!-- Bootstrap + bootstrap dependancies -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container" id="form-container">
	<div class="col-xs-12">
		<h1 class="text-center">Parkit.</h1>

		<!-- Form Group for Login -->
		<form>
			<div class="form-group">
				<label class="sr-only" for="email">Email address:</label>
				<input type="email" class="form-control" id="email" placeholder="Email Address:">
			</div>
			<div class="form-group">
				<label class="sr-only" for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Password:">
			</div>

			<div class="row">
				<div class="col-xs-10" id="login-options">
					<a href="#">Signup</a>
					<br>
					<a href="#">Forgotten your Password?</a>
				</div>

				<div class="col-xs-2">
					<button type="submit" class="btn btn-default pull-right">Submit</button>
				</div>
				
			</div>
			
		</form> 
	</div>

</div>

</body>

</html>