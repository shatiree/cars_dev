<?php
	function print_pre($data){
		echo"<pre>";
		print_r($data);
		echo"</pre>";
	}
	
	function secure_input($con,$data)
	{
		$data = trim($data);
		$data = mysqli_real_escape_string($con,$data);
		$data = htmlentities($data);
		return $data;
	}
	function active_menu($str){
		if(isset($_GET['page']))
		if($_GET['page']==$str)
		return 'class="active"';
		
	}
 
	function redirect($url)
	{
		if (!headers_sent())
		{
			header("Location:$url");
		}
		else
		{
			echo "<meta http-equiv=\"refresh\" content=\"0;url=$url\">\r\n";
		}
	}
	
	function date_ymd ($date){
		
		if($date != '00-00-0000' && $date != ''&& $date != '01-01-1970')
		$date_formated = date('Y-m-d',strtotime($date));
		else
		$date_formated = '0000-00-00';
		
		return $date_formated;
		
	}
	
	function date_dmy($date){
		
		if($date != '0000-00-00' && $date != ''&& $date != '1970-01-01')
		$date_formated = date('d-m-Y',strtotime($date));
		else
		$date_formated = '';
		
		return $date_formated;
	}			