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


$id = $_GET['ba_id'];
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



$html =' 
	
	<style>
	#container1 {
    border: 1px solid black;
	border-collapse: collapse;
	}
	</style>
	<table class="table" width="100%" height="300">
	<tr>
	<td > <img src="asset/Honda-logo-1920x1080.png" width="100px" height="50px"></td>
	<td  style="font-size: large">BUYER&#39;S AGREEMENT</td>
	
	</tr>
	</table>
    <hr>
	
	<table class="table" width="100%" height="300">
    <tr>
	<td style="padding-bottom: 20px" width="50%">
	Serial No : B188-'.$serialno.' 
	</td>
	
	<td align="right" style="padding-bottom: 20px" width="50%">
	Date : B188-'.$serialno.' 
	</td>
    </tr>
    
    <tr>
	<td style="font-size: small">I/We '.$cust_name.'</td> 
	<td style="font-size: small">I/C No : '.$salestype.'</td>
    </tr>
    
    <tr>
	<td style="font-size: small">of '.$cust_address.'</td>
    </tr>
    
    <tr>
	<td style="font-size: small">Tel(O/hp)'.$cust_p_mobile.'</td>
	<td style="font-size: small">Tel(H)'.$cust_p_mobile.'</td>
    </tr>
	
	</table>
	
	<p style="font-size: small"><strong>hereby confirm having agreed to purchase this day from ****, the undermentioned NEW 	USED 	</strong></p>
	<p style="font-size: small"><strong>Vehicle at the price as shown below, on the terms and condition hereinafter mentioned and printed at the back hereof :-</strong></p>
	
	<table id="container1" width="800">
	
	<tr id="container1">
	<td id="container1">Make : '.$model.'</td>
	<td id="container1">Color : '.$salestype.'</td>
	<td id="container1">CC Capacity : '.$salestype.'</td>
	<td id="container1">Year of Mg : '.$salestype.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1">Engine No : '.$model.'</td>
	<td id="container1">Chasis No : '.$salestype.'</td>
	<td id="container1">Credit No : '.$salestype.'</td>
	<td id="container1">Regn No   : '.$salestype.'</td>
    </tr>
	
    </table>
	
	<table id="container1" width=700>
    <tr id="container1">
	<td id="container1" style="font-size: small"><b>DESCRIPTION </b></td>
	<td id="container1" style="font-size: small" width=200><b>Amount (RM) </b></td>
    </tr>
    </table>
	
	<table id="container1" width=700>
    <tr id="container1">
	<td id="container1" style="font-size: small">Approved Nett Selling Price(With Standard Accessories) '.$color.'</td>
	<td id="container1" style="font-size: small" width=150> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Excise Duty '.$color.'</td>
	<td id="container1" style="font-size: small" width=150> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Sales Tax '.$color.'</td>
	<td id="container1" style="font-size: small" width=150> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Mettalic Paint '.$color.'</td>
	<td id="container1" style="font-size: small" width=150> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Registration Fee/Transfer Fee(used Vehicle) Ownership Claim '.$color.'</td>
	<td id="container1" style="font-size: small" width=150> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Road Tax For <input type="text" class="form-control" name="tax" style="width: 30%; display: inline !important;"> Month '.$color.'</td>
	<td id="container1" style="font-size: small" width=150> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Recommend Acessories '.$color.'</td>
	<td id="container1" style="font-size: small" width=150> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Extra Acessories : '.$color.'</td>
	<td id="container1" style="font-size: small" width=150> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"> '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"> '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"> '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"> '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"> '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"> '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"> '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"> '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Insurance : Sum Insured RM '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small"><b>TOTAL PRICE(On The Road) '.$color.'</b></td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Less Trade In '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Less Trade In '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Less Credit Note/Debit Note '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Less Down Payment '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Add H.P Encumberance '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Balance To Be Settled By You '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
	<tr id="container1">
	<td id="container1" style="font-size: small">Amount To Be Financed By '.$color.'</td>
	<td id="container1" style="font-size: small" width=150 height=15> '.$engineno.'</td>
	<td id="container1" style="font-size: small" width=50> '.$engineno.'</td>
    </tr>
	
    </table>
    
    <table class="table" width="100%" height="300">
    <tr>
	<td style="font-size: small">FINANCE BY : '.$deliverydate.'</td>
	<td style="font-size: small">MONTHLY INSTALL : '.$deliverydate.'</td>
	<td style="font-size: small">DUE DATE : '.$deliverydate.'</td>
    </tr>
    </table>
    
    
    
    <tr>
	<td style="padding-top: 10px; text-decoration: underline"><h5>SUMMARY OF PAYMENTS:-</h5></td>
    </tr>
    
    <table class="table" width="80%" height="300">
    <tr>
	<td style="font-size: small">Booking Fee/Deposit Received Receipt No : '.$deliverydate.'</td>
	<td style="font-size: small">dated : '.$deliverydate.'</td>
    </tr>
    
    <tr>
	<td style="font-size: small">Down Payment Received Receipt No : '.$deliverydate.'</td>
	<td style="font-size: small">dated : '.$deliverydate.'</td>
    </tr>
    
    <tr>
	<td style="font-size: small">Balance of RM <input type="text" class="form-control" name="tax" style="width: 10%; display: inline !important;"> to be paid '.$deliverydate.'</input> <input type="text" class="form-control" name="tax" style="width: 10%; display: inline !important;"></input></td>
    </tr>
    </table>


    <tr>
	<td style="padding-top: 10px; text-decoration: underline"><h5>OTHER CONDITIONS:-</h5></td>
    </tr>
<tr>
<td colspan="4"><hr></td>
</tr>

<tr>
<td colspan="4" style="font-size: 10px">
<p>I/We have read and understand the terms on the back hereof and ? to them as part of this order as if they were printed above my/our signature
</p>
</td>
<td style="padding-right: 40px;font-size: 8px">
  <img src="'.$sign1.'" class="img-responsive" width="100" height="100"><br/>Signature Of Purchaser <br/>
</td>

</tr>


';


// echo  $html;exit;
$mpdf = new mPDF();
$mpdf->autoScriptToLang = true;

//if(isset($_REQUEST['restrictColorSpace']))
// $mpdf->restrictColorSpace = 1;

$mpdf->useAdobeCJK = true;//added 18092016
$mpdf->autoScriptToLang = true; //added 18092016
$mpdf->baseScript = 1;
$mpdf->autoLangToFont = true;
$mpdf ->autoArabic=true;
// $mpdf->simpleTables = true;
$mpdf ->WriteHTML($html);
$mpdf ->Output();
exit;
$mpdf =ob_get_clean();

?>