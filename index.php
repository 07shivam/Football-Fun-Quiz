
<?php 

	$con = mysqli_connect('t800','t800');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quizdbase');

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->

</head>
<body>

	<div class="container">
		<h1 class="text-center"> Welcome to Football Fun Quiz </h1><br>

		<div class="row">
			
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center"> Login Form </h4>
					<br>
					<form action="login.php" method="post">
						<div class="form-group">
							<label for="user "> Username: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> Password: </label>
							<input type="text" name="pass" id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit"> Submit </button>
					</form>
				
				</div>
			</div>

			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center"> SignUp Form </h4>
					<br>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label for="user "> Username: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> Password: </label>
							<input type="text" name="pass" id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit"> Submit </button>
						<div class="duplicate"> </div>
					</form>

				</div>
			</div>
				</div>
			</div>

		</div>

	</div>

</body>
</html>