<?php	
	include('config/db.php');
	
	if(isset($_POST["submit"]))
	{
	    $bf_id = $_POST['bf_id'];
	    $cust_id = $_POST['custid'];
		
		$registration	=$_POST['registration'];
		$chasis			=$_POST['chasis'];
		$engine			=$_POST['engineno'];
		$sale			=$_POST['sale'];
		$aggrement		=$_POST['aggrement'];
		$sign1			=$_POST['sign1'];
		$sign2			=$_POST['sign2'];
		$sign3			=$_POST['sign3'];
		$jackhandle		=$_POST['jackhandle'];
		$tools			=$_POST['tools'];
		$manuals		=$_POST['manuals'];
		$sparetyre		=$_POST['sparetyre'];
		$cigarette		=$_POST['cigarette'];
		$floormats		=$_POST['floormats'];
		$lightswitches	=$_POST['lightswitches'];
		$turnsignal		=$_POST['turnsignal'];
		$indicatorlight	=$_POST['indicatorlight'];
		$wiperwasher	=$_POST['wiperwasher'];
		$operation		=$_POST['operation'];
		$powerwindow	=$_POST['powerwindow'];
		$controldoor	=$_POST['controldoor'];
		$seatadjustment	=$_POST['seatadjustment'];
		$tiltingsteering=$_POST['tiltingsteering'];
		$childprooflock	=$_POST['childprooflock'];
		$morningstartig	=$_POST['morningstartig'];
		$bonnet			=$_POST['bonnet'];
		$automotive		=$_POST['automotive'];
		$vehiclejacking	=$_POST['vehiclejacking'];
		$engine			=$_POST['engine'];
		$transmission	=$_POST['transmission'];
		$coolant		=$_POST['coolant'];
		$brakeandclutch	=$_POST['brakeandclutch'];
		$powersteering	=$_POST['powersteering'];
		$presssure		=$_POST['presssure'];		
		$seat			=$_POST['seat'];
		$dashboard		=$_POST['dashboard'];
		$doorpading		=$_POST['doorpading'];
		$sunvisor		=$_POST['sunvisor'];
		$carpet			=$_POST['carpet'];
		$glassesmirror	=$_POST['glassesmirror'];
		$rooflining		=$_POST['rooflining'];
		$pillargarnish	=$_POST['pillargarnish'];
		
		
		
		$sql7 = "INSERT INTO tb_delivery_order(do_register_no,do_chasis_no,do_engine_no, do_sale_net_no, do_jackhandle, do_tools, do_manuals, do_sparetyre, do_cigarette, do_floormats, do_light_switches, do_turn_signal_switch, do_dashboard_indicator_light, do_wiper_washer, do_operation_accessories, do_window, do_control_door_lock, do_seat_adjustment, do_tilting_steering, do_child_proof_lock, do_morning_starting_procedure, do_bonet_truck, do_automotive_transmission, do_vehicle_jacking, do_engine_oil, do_transmission_oil, do_coolant, do_brake_clutch, do_power_steering, do_type_pressure, do_seat, do_dashboard, do_door_pading, do_sun_visor, i_carpet, i_glasses_mirror, i_roof_lining, i_pillar_garnish, do_sign_customer, do_sign_salesman, do_sign_manager, do_aggrement, bf_id) 
		VALUES('$registration','$chasis','$engine','$sale','$jackhandle','$tools','$manuals','$sparetyre','$cigarette','$floormats','$lightswitches','$turnsignal','$indicatorlight','$wiperwasher','$operation','$powerwindow','$controldoor','$seatadjustment','$tiltingsteering','$childprooflock','$morningstartig','$bonnet','$automotive','$vehiclejacking','$engine','$transmission','$coolant','$brakeandclutch','$powersteering','$presssure','$seat','$dashboard','$doorpading','$sunvisor','$carpet','$glassesmirror','$rooflining','$pillargarnish','$sign1','$sign2','$sign3','$aggrement', '$bf_id')";
		$result7=mysqli_query($con, $sql7);
		$od_id = mysqli_insert_id($con);
		if($result7)
		{
			echo "<script language='javascript'>location.href = 'index.php?page=doSuccess&id=$cust_id&do_id=$od_id';</script>";
		}
		
		
		
		
		
		
		
		/*  $sql6="INSERT INTO tb_delivery_order(do_register_no,do_chasis_no,do_engine_no,do_sale_net_no,do_sign_customer,do_sign_salesman,do_sign_manager,do_aggrement)VALUES
			('$registration','$chasis','$engine','$sale','$sign1','$sign2','$sign3','$aggrement')"; 
			
			$result6=mysqli_query($con, $sql6);
			if($result6)
			{
			echo "<script language='javascript'>alert('Account Successfully Created');</script>";
			}
			
		$id=mysqli_insert_id($con); */
		
		
		/* 	
			$sql1="INSERT INTO tb_standard_equipment(do_id,se_jackhandle,se_tools,se_manuals,se_sparetyre,se_cigarette,se_floormats)VALUES
			('$id','$jackhandle','$tools','$manuals','$sparetyre','$cigarette','$floormats')";
			$result1=mysqli_query($con, $sql1);
			if($result1)
			{
			///echo "<script language='javascript'>alert('Account Successfully Created');</script>";
			}
			
			
			
			$sql2="INSERT INTO tb_operational_items(do_id,oi_light_switches,oi_turn_signal_switch,oi_dashboard_indicator_light,oi_wiper_washer,oi_operation_accessories,oi_window,oi_control_door_lock,oi_seat_adjustment,oi_tilting_steering,oi_child_proof_lock,oi_morning_starting_procedure,oi_bonet_truck,oi_automotive_transmission,oi_vehicle_jacking)VALUES
			('$id','$lightswitches','$turnsignal','$indicatorlight','$wiperwasher','$operation','$powerwindow','$controldoor','$seatadjustment','$tiltingsteering','$childprooflock','$morningstartig','$bonnet','$automotive','$vehiclejacking')";
			$result2=mysqli_query($con, $sql2);
			if($result2)
			{
			//echo "<script language='javascript'>alert('Account Successfully Created');</script>";
			}
			
			
			$sql3="INSERT INTO tb_maintenance_checking(do_id,mc_engine_oil,mc_transmission_oil,mc_coolant,mc_brake_clutch,mc_power_steering,mc_type_pressure)VALUES
			('$id','$engine','$transmission','$coolant','$brakeandclutch','$powersteering','$presssure')";
			$result3=mysqli_query($con, $sql3);
			if($result3)
			{
			//echo "<script language='javascript'>alert('Account Successfully Created');</script>";
			}
			
			
			
			$sql4="INSERT INTO tb_internal(do_id,i_seat,i_dashboard,i_door_pading,i_sun_visor,i_carpet,i_glasses_mirror,i_roof_lining,i_pillar_garnish)VALUES
			('$id','$seat','$dashboard','$doorpading','$sunvisor','$carpet','$glassesmirror','$rooflining','$pillargarnish')";
			$result4=mysqli_query($con, $sql4);
			if($result4)
			{
			//echo "<script language='javascript'>alert('Account Successfully Created');</script>";
		} */
		
		$accessories = $_POST['txt']; 
		
		foreach ($accessories as $a => $b)
		{
			$sql5="INSERT INTO tb_accessories(do_id,a_name)VALUES
			('$od_id','$accessories[$a]')";
			$result5=mysqli_query($con, $sql5);
			if($result5)
			{
				//echo "<script language='javascript'>alert('Account Successfully Created');</script>";
			}
		}
		
	}
?>