<?php 
$db = mysqli_connect("localhost","root","","dps");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    
	.heading{
        background-color: BLUE;
    }

	.form{
		background-image: url("formbg.jpg");
		width: 600px;
		border-style: dotted;
  		border: 5px solid yellow;  
		padding: 50px;
		margin: auto;
		margin-top: 100px;
	
	}

</style>

</head>
<body background ="loginbg.jpg">

<div class="form" >
<div class="container-fluid text-left">
	<form  class="form-horizontal" method="POST">
			
			<div class="form-group"> 
			<label>Username:</label>
			<input type="text" name="username" placeholder="Enter your username"></input>
			</div>

			<br>
			
			<div class="form-group"> 
			<label>Password:</label>
			<input type="password" name="password" placeholder="Enter your password"></input>
			</div>

			<br>
			
			<div class="form-group"> 
			<label>User Type:</label><br>
			<input type="radio" name="Admin">admin</input>
			<br>
			<input type="radio" name="Staff">staff</input>
			<br>
			<input type="radio" name="student">Student</inpust>		
			<br>
			</div>

			<div class="form-group"> 
			<button type="submit" name="login_btn" value="login" class="btn btn-success">
      		Submit
      		</button>
			</div>
		</form>
	</div>
</div>



</body>
</html> 

<?php 
session_start();

//connect to DB
$db = mysqli_connect("localhost","root","","dps");

if(isset ($_POST['login_btn'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db, $sql);

	if(($result) == 1){
		$_SESSION['message'] = "You are now logged in";
		$_SESSION['username'] = $username;
		header("location: home.php"); //redirect to homepage
	}
	else{
		$_SESSION['message'] = "Incorrect login credentials";

	}

}

?>
