<?php
	
	// PHP Version 5.5.12
	
	error_reporting(E_ALL);
$con=mysqli_connect("localhost","root","","db_cars");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// ...some PHP code for database "my_db"...

// Change database to "test"
// mysqli_select_db($con,"test");

// ...some PHP code for database "test"...

// mysqli_close($con);
?>