<?php


ini_set("memory_limit","256M");
include('config/db.php');
// include('function/func.php');
include ('mpdf/mpdf.php');




ob_start();

$html ='   
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widtd=device-width, initial-scale=1">
	<title>Admin Area | Dashboard</title>
	</head>
	
	
	<body>';

            $id = $_POST['ba_id'];
            $sql = "SELECT * FROM tb_buyer_agrmnt WHERE ba_id = $id";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $ba_agree_date = $row['ba_agree_date'];
            $ba_of_desc = $row['ba_of_desc'];
            $ba_car_cond = $row['ba_car_cond'];
            $ba_item1_desc = $row['ba_item1_desc'];
            $ba_item1_prc = $row['ba_item1_prc'];
            $ba_item2_desc = $row['ba_item2_desc'];
            $ba_item2_prc = $row['ba_item2_prc'];
            $ba_item3_desc = $row['ba_item3_desc'];
            $ba_item3_prc = $row['ba_item3_prc'];
            $ba_item4_desc = $row['ba_item4_desc'];
            $ba_item4_prc = $row['ba_item4_prc'];
            $ba_item5_desc = $row['ba_item5_desc'];
            $ba_item5_prc = $row['ba_item5_prc'];
            $ba_rtax_prd = $row['ba_rtax_prd'];
            $ba_rtax_prc = $row['ba_rtax_prc'];
            $ba_ins_sum = $row['ba_ins_sum'];
            $ba_ttl_prc_otr = $row['ba_ttl_prc_otr'];
            $ba_tradein= $row['ba_tradein'];
            $ba_cn_dn= $row['ba_cn_dn'];
            $ba_down_pay= $row['ba_down_pay'];
            $ba_hp_encm= $row['ba_hp_encm'];
            $ba_blnce_settle= $row['ba_blnce_settle'];
            $ba_financeby_name	= $row['ba_financeby_name	'];
            $ba_fby_prc= $row['ba_fby_prc'];
            $ba_monthly_i= $row['ba_monthly_i'];
            $ba_due_date= $row['ba_due_date'];
            $ba_bfdr_receipt_no= $row['ba_bfdr_receipt_no'];
            $ba_downpay_rno= $row['ba_downpay_rno'];
            $ba_bfdr_date= $row['ba_bfdr_date'];
            $ba_downpay_date= $row['ba_downpay_date'];
            $ba_balncerm= $row['ba_balncerm'];
            $ba_cust_sign= $row['ba_cust_sign'];
            $bf_id= $row['bf_id'];

            $serialno = str_pad($id, 4, "0", STR_PAD_LEFT);

             $sql2 = "SELECT * FROM tb_cust_info WHERE cust_id = '$custid'";
            $query = mysqli_query($con, $sql2);
            $row2 = mysqli_fetch_array($query);

            $sql3 = "SELECT * FROM tb_model WHERE mdl_id = '$model_id'";
            $query1 = mysqli_query($con, $sql3);
            $row3 = mysqli_fetch_array($query1);

            $sql4 = "SELECT * FROM tb_variant WHERE vrnt_id = '$variant_id'";
            $query2 = mysqli_query($con, $sql4);
            $row4 = mysqli_fetch_array($query2);

            $sql5 = "SELECT * FROM tb_book_form WHERE bf_chasis_no = '$bf_chasis_no'";
            $query3 = mysqli_query($con, $sql5);
            $row5 = mysqli_fetch_array($query3);

            $bf_chasis_no= $row['bf_chasis_no'];

            $sql6 = "SELECT * FROM tb_book_form WHERE bf_engine_num = '$bf_engine_num'";
            $query4 = mysqli_query($con, $sql6);
            $row6 = mysqli_fetch_array($query5);

            $bf_engine_num= $row['bf_engine_num'];




?>