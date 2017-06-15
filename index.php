<?php
	session_set_cookie_params(0);
	session_start();
	error_reporting(E_ALL);
  // print_r($_SESSION);
	//connect & select db
	include('config/db.php');
  	include('lib/func.php');
 
	
	//cek dah login?
	if (empty($_SESSION['username'])){
	header('refresh:0 URL=login.php'); 
		echo '<META http-equiv="refresh" content="0;URL=login.php">';
		}
		else{//berjaya login
		include 'header.php';
		 
		if(isset($_GET['page']))//cek include page	
		include $_GET['page'].'.php';
		else{
			//set default page base on role
			// if($_SESSION['role_id'] == 3){ //3 = Pegawai
				// include 'xxxx.php'; // need modify according to role
			// }
			// else{
				/*  if(isset($_SESSION['lp'])){  
				include 'tListPatient.php';
				 }
				 if(isset($_SESSION['lpv'])){  	
				include 'tListPatientVisit.php';
				 } */
				
			// }
			include 'home.php';
		}
		
		include 'footer.php';
	}
?>