<?php
ini_set("memory_limit","256M");
include('config/db.php');
// include('function/func.php');
include ('mpdf/mpdf.php');




ob_start();

echo '   
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widtd=device-width, initial-scale=1">
	<title>Admin Area | Dashboard</title>
	</head>
	<style>
	table, th, td {
    width:100%;
    border: solid 1px black;
       
    }
    
    th, td {
        padding: 10px !important;
    }

  </style>
	
	
	<body>';

        $id = $_GET['bf_id'];
        $sql = "SELECT * FROM tb_delivery_order WHERE do_id = '$id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $do_reg_no = $row['do_register_no'];
        $do_chasis_no = $row['do_chasis_no'];
        $do_engine_no = $row['do_engine_no'];
        $do_sale_net_no = $row['do_sale_net_no'];
        $do_jackhandle = $row['do_jackhandle'];
        $do_tools = $row['do_tools'];
        $do_manuals = $row['do_manuals'];
        $do_sparetyre = $row['do_sparetyre'];
        $do_cigarette = $row['do_cigarette'];
        $do_floormats = $row['do_floormats'];
        $do_light_switches = $row['do_light_switches'];
        $do_turn_signal_switch = $row['do_turn_signal_switch'];
        $do_dashboard_indicator_light = $row['do_dashboard_indicator_light'];
        $do_wiper_washer = $row['do_wiper_washer'];
        $do_operation_accessories = $row['do_operation_accessories'];
        $do_window = $row['do_window'];
        $do_control_door_lock = $row['do_control_door_lock'];
        $do_seat_adjustment = $row['do_seat_adjustment'];
        $do_tilting_steering = $row['do_tilting_steering'];
        $do_child_proof_lock = $row['do_child_proof_lock'];
        $do_morning_starting_procedure = $row['do_morning_starting_procedure'];
        $do_bonet_truck = $row['do_bonet_truck'];
        $do_automotive_transmission = $row['do_automotive_transmission'];
        $do_vehicle_jacking = $row['do_vehicle_jacking'];
        $do_engine_oil = $row['do_engine_oil'];
        $do_transmission_oil = $row['do_transmission_oil'];
        $do_coolant = $row['do_coolant'];
        $do_brake_clutch = $row['do_brake_clutch'];
        $do_power_steering = $row['do_power_steering'];
        $do_type_pressure = $row['do_type_pressure'];
        $do_seat = $row['do_seat'];
        $do_dashboard = $row['do_dashboard'];
        $do_door_pading = $row['do_door_pading'];
        $do_sun_visor = $row['do_sun_visor'];
        $i_carpet = $row['i_carpet '];
        $i_glasses_mirror = $row['i_glasses_mirror'];
        $i_roof_lining = $row['i_roof_lining'];
        $i_pillar_garnish = $row['i_pillar_garnish'];
        $do_sign_customer = $row['do_sign_customer'];
        $do_sign_salesman = $row['do_sign_salesman'];
        $do_sign_manager = $row['do_sign_manager'];
        $do_aggrement = $row['do_aggrement'];


        echo '
           <table>
              <tr>
                 <td colspan="4" style="background-color: red; color: white"><b>HONDA</b></td>
              </tr>
              
              <tr>
                   <td width="50%">
                    <div style="width:500px;height:300px;border:1px solid #000;"></div>
                   </td>
                   <td width="50%">
                     <div style="width:500px;height:300px;border:1px solid #000;"></div> 
                   </td>
              </tr>
              
              <tr>
                <td>
                  DATE OF DELIVERY :
                </td>
                <td>
                  SERIAL NO :
                </td>
              </tr>
              
              <tr>
                <td>
                 <div style="text-decoration: underline">
                  <b><h3>Vehicle Particulars :</h3></b>
                 </div>
                 <div>
                  <b>Registration No : </b> '.$do_reg_no.'
                 </div>
                  <div>
                  <b>Chasis No :</b> '.$do_chasis_no.'
                 </div>
                  <div>
                  <b>Engine No :</b> '.$do_engine_no.'
                 </div>
                  <div>
                  <b>Sale Return No :</b> '.$do_sale_net_no.'
                 </div>
                  
                </td>
                <td>
                <div style="text-decoration: underline">
                  <b><h3>Standard Equipment :</h3></b>
                </div>
                
                <div style="text-decoration: none">';

                if($do_jackhandle == 1)
                  echo '<input type="checkbox" name="eq" checked> Jack and Handle<br>';
                else
                    echo '<input type="checkbox" name="eq"> Jack and Handle<br>';

                if($do_tools == 1)
                  echo '<input type="checkbox" name="eq" checked> Tools<br>';
                else
                    echo '<input type="checkbox" name="eq"> Tools<br>';

                if($do_manuals == 1)
                  echo '<input type="checkbox" name="eq"> Owners Manual<br>';
                else
                  echo '<input type="checkbox" name="eq"> Owners Manual<br>';

                if($do_sparetyre == 1)
                  echo '<input type="checkbox" name="eq"> Spare Tyre With Wheel Rim<br>';
                else
                  echo '<input type="checkbox" name="eq"> Spare Tyre With Wheel Rim<br>';

                if($do_cigarette == 1)
                  echo '<input type="checkbox" name="eq"> Cigarette Lighter<br>';
                else
                    echo '<input type="checkbox" name="eq"> Cigarette Lighter<br>';
                
                 if($do_floormats == 1)
                   echo '<input type="checkbox" name="eq"> Floor Mats<br>';
                </div>
                </td>
              </tr>
           
           
           </table>
        
        
        
        '








?>