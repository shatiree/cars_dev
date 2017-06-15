<?php
	
	include('lib/func.php');
	include ('config/db.php');
	
	session_start();
	$username = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "SELECT st_username FROM tb_staff WHERE st_pass ='$pass' && st_username = '$username'";

	$query = mysqli_query($con, $sql);

	if($query){
	    $_SESSION['username'] = $username;
	   redirect("index.php");
    }
    else{
        echo'<script> alert("Please Enter The Correct Credentials.");
             </script>';
    }
?>