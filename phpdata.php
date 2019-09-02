<?php 
  
  $conn = mysqli_connect('localhost','root','','school');

  if($conn)
    echo 'connected to the database';
	$sql = "insert into query (name,email,contact,city,query) values ('beta','beta@beta.com','31231231','delhi','i want to make a query')";

	$query = mysqli_query($conn, $sql);
	if($query)
		echo "data submitted sucessfully";
?>





for QUERYYYYYYYYYYYYYY
<?php
if(isset($_POST["query"]))
{    
	$name=$_POST["name"];
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$city=$_POST["city"];
  	$query=$_POST["query"];	

mysqli_query($conn,"insert into `query`(`name`,`email`,`contact`,`city`,`query`) 
VALUES('$name','$email','$contact','$city','$query')");
}

$query = mysqli_query($conn, $sql);
	if($query)
		echo "data submitted sucessfully";

?>