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


        $id = $_GET['bf_id'];
        $sql = "SELECT * FROM tb_book_form WHERE bf_id = '$id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        $custid = $row['bf_cust_id'];
        $model_id = $row['bf_model_id'];
        $variant_id = $row['bf_variant_id'];
        $color_id = $row['bf_colour_id'];
        $prc_id = $row['bf_prc_id'];
        $deliverydate = $row['bf_delivery_date'];
        $salestype = $row['bf_sales_type'];
        $engineno = $row['bf_engine_num'];
        $chasisno = $row['bf_chasis_no'];
        $discount = $row['bf_discount'];
        $accsories = $row['bf_accessories'];
        $misc = $row['bf_misc_sales'];
        $ncd = $row['bf_ncd'];
        $ttl = $row['bf_total_fee'];
        $bFee = $row['bf_booking_fee'];
        $amtf = $row['bf_amt_financed'];
        $fprd = $row['bf_finance_period'];
        $type = $row['bf_type_finance'];
        $company = $row['bf_company'];
        $agentcode = $row['bf_agent_code'];
        $covernote = $row['bf_cover_noted'];
        $dateissued = $row['bf_date_issued'];
        $sign1 = $row['bf_cust_sign'];
        $sign2 = $row['bf_SA_sign'];
        $sign3 = $row['bf_SM_sign'];
        $sa_name = $row['bf_SA_name'];
        $sa_ic = $row['bf_SA_ic'];
        $sm_name = $row['bf_SM_name'];
        $sm_ic = $row['bf_SM_ic'];

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

        $sql5 = "SELECT * FROM tb_price WHERE prc_id = '$prc_id'";
        $query3 = mysqli_query($con, $sql5);
        $row5 = mysqli_fetch_array($query3);

        $sql6 = "SELECT * FROM tb_colour WHERE clr_id = '$color_id'";
        $query4 = mysqli_query($con, $sql6);
        $row6 = mysqli_fetch_array($query4);



        $cust_name = $row2['cust_name'];
        $cust_ic = $row2['cust_ic'];
        $ic = str_split($cust_ic, 2);
        $ic1 = $ic[0] . $ic[1] . $ic[2];
        $ic2 = $ic[3];
        $ic3 = $ic[4] . $ic[5];

        $cust_address = $row2['cust_address'];
        $cust_p_home = $row2['cust_p_home'];
        $cust_p_office = $row2['cust_p_office'];
        $cust_p_mobile = $row2['cust_p_mobile'];

        $model = $row3['mdl_desc'];
        $variant = $row4['vrnt_desc'];
        $color = $row6['clr_desc'];

        $sell_price = $row5['selling_price'];
        $gst = $row5['gst'];
        $roadtax_1y = $row5['road_tax_1y'];
        $reg_fee = $row5['reg_fee'];
        $noplate = $row5['num_plate_inc_gst'];
        $oef = $row5['own_endors_fee'];
        $insurance = $row5['insurance_inc_gst'];


$html =' 
    <table class="table" width="100%">
    <tr>
        <td style="padding-bottom: 20px" width="50%">
            Serial No : B188-'.$serialno.' 
        </td>
        <td align="right" width="50%">
          <img src="asset/Honda-logo-1920x1080.png" width="100px" height="50px">
        </td>
    </tr>
    
    <tr>
      <td colspan="4" style="background-color: black; color: #fbfff9; padding-left: 10px"><h1>Booking Form</h1></td>
    </tr>
    
    <tr>
      <td style="padding-top: 10px;text-decoration: underline"><h5>Customer Particulars</h5></td>
    </tr>
    
    <tr>
       <td style="font-size: small"><b>Name :</b> '.$cust_name.'</td> 
    </tr>
    
    <tr>
      <td style="font-size: small"><b>NRIC No :</b> '.$cust_ic.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Address :</b> '.$cust_address.'</td>
    </tr>
    
    <tr>
       <td style="font-size: small"><b>Contacts :</b>
                        (Home)  &nbsp;:&nbsp;'.$cust_p_home.'
                        (Mobile)&nbsp;:&nbsp;'.$cust_p_mobile.'
                        (Office)&nbsp;:&nbsp;'.$cust_p_office.'
       </td>
    </tr>
    
    
     <tr>
      <td style="padding-top: 10px;text-decoration: underline"><h5>Orders Particulars</h5></td>
    </tr>
    
    <tr>
       <td style="font-size: small"><b>Model :</b> '.$model.'</td>
        <td style="font-size: small"><b>Sales Type :</b> '.$salestype.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Variant :</b> '.$variant.'</td>
       <td style="font-size: small"><b>Chasis No :</b> '.$chasisno.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Color :</b> '.$color.'</td>
      <td style="font-size: small"><b>Engine No :</b> '.$engineno.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Delivery Date :</b> '.$deliverydate.'</td>
    </tr>
    
    <tr>
      <td style="padding-top: 10px; text-decoration: underline"><h5>Price Structure</h5></td>
      <td style="padding-top: 10px; text-decoration: underline"><h5>Finance</h5></td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Selling Price :</b> RM '.$sell_price.'</td>
      <td style="font-size: small"><b>Type Of Finance :</b> '.$type.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b><span style="color: red">Less (Discount) :</span></b> RM '.$discount.'</td>
      <td style="font-size: small"><b>Amount Financed :</b> RM '.$amtf.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Sub Total :</span></b> RM '.($sell_price-$discount).'</td>
      <td style="font-size: small"><b>Finance Period :</b> '.$fprd.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>GST 6% :</span></b> RM '.$gst.'</td>
    </tr>
    
     <tr>
      <td style="font-size: small"><b>No. Plate (Inclusive 6% GST) :</span></b> RM '.$noplate.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Road Tax (1 Year) :</b> RM '.$roadtax_1y.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Registration Fee :</b> RM '.$reg_fee.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Ownership Endorsement Fee :</b> RM '.$oef.'</td>
      <td colspan="2" style="text-decoration: underline"><h5>Insurance</h5></td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Accessories :</b> RM '.$accsories.'</td>
      <td style="font-size: small"><b>Company :</b> '.$company.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Miscellaneous Fee (Inclusive 6% GST) :</b> RM '.$misc.'</td>
      <td style="font-size: small"><b>Agent Code :</b> '.$agentcode.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>Insurances (Inclusive 6% GST) :</b> RM '.$insurance.'</td>
       <td style="font-size: small"><b>Cover Note :</b> '.$covernote.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>NCD :</b> '.$ncd.' %</td>
       <td style="font-size: small"><b>Date Issued :</b> '.$dateissued.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>TOTAL :</b> RM '.$ttl.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>BOOKING FEE PAID :</b> RM '.$bFee.'</td>
    </tr>
    
    <tr>
      <td style="font-size: small"><b>TOTAL OUTSTANDING SUM :</b> RM '.($ttl-$bFee).'</td>
    </tr>
  
     <tr>
      <td colspan="4"><hr></td>
    </tr>
    
    <tr>
       <td colspan="4" style="font-size: 10px">
         <p><b>I, the undersigned , hereby agree and acknowlegde to be bound by the terms and conditions
                                       contained herein and which shall be binding and enforceable upon me. I hereby acknowledge
                                       and agree on the following :</b>
                                    </p>
                                     <p>
                                     <ol type="a">
                                         <li style="margin-top: 10px">
                                             that HMSB Authorized Dealers has the sole discretion in deciding on refunding
                                             my booking fees that has been paid in total of RM <input type="text" id="bf" name="bf" style="width: 20%!important;" value="'.$bFee.'">
                                             wide cash or cheque no. <input type="text" name="bfch" style="width: 20%!important;">.
                                         </li>
                                         <li style="margin-top: 10px">
                                             that in the event, I decide to cancel my booking at any point of time. I hereby agree and undertake to compensate
                                             or idemnify HMSB Authorized Dealers for any costs and/or expenses that they have incurred in processing my booking up
                                             until the stage of registration
                                         </li>
                                         <li style="margin-top: 10px">
                                             that I agree although I have received my booking fee in case of cancellation, I am still under obligation to reimburse
                                             HMSB Authorized Dealers a reasonable fees determined by them for my cancellation of the vehicle booking.
                                         </li>
                                     </ol>
                                     </p>

       </td>
    </tr>
    
    <tr style="padding: 0">
      <td colspan="4" style="font-size: 8px">
        <table>
          <tr>
          <td style="padding-right: 40px;font-size: 8px">
            <b>Customer Signature :</b>  <br/>
            <img src="'.$sign1.'" class="img-responsive" width="100" height="100"><br/>
            <b>Name :</b> '.$cust_name.'&nbsp;<br/>
            <b>IC :</b>  '.$cust_ic.'
          </td>
          <td style="padding-right: 40px;font-size: 8px" >
            <b>Sale Advisor Signature :</b>  <br/>
            <img src="'.$sign2.'" class="img-responsive" width="100" height="100"><br/>
            <b>Name :</b> '.$sa_name.'<br/>
            <b>IC :</b> '.$sa_ic.'
          </td>
          <td style="padding-right: 40px;font-size: 8px">
            <b>Sale Manager Signature :</b>  <br/>
            <img src="'.$sign3.'" class="img-responsive" width="100" height="100"><br/>
            <b>Name :</b> '.$sm_name.' &nbsp;<br/>
            <b>IC :</b> '.$sm_ic.'
          </td>
          </tr>
        </table>
     </td>
    </tr>
    
    <tr>
    <td colspan="4" style="font-size: 8px">
     <p><b>Note :</b>
     </p>
     <p>
     <ol type="1">
         <li style="padding-top: 10px">
             Customer shall pay the booking fee after the Part ii (of the Second Schedule)
             of the loan agreement is completed.
         </li>
         <li>
             Booking fee is NOT taxable. However in casse of cancellation HMSB Authorized Dealer
             reserves the right to claim the 6% of GST fom the customer.
         </li>
         <li>
             All payment by CHEQUE should be oneself and made payable to HMSB Authorized Dealers.
         </li>
         <li>
             Insist on an Official Receipt immediately if payment made by CASH. If
             you do not receive an Official Receipt within seven(7) days after payment is made,
             please notify the Sales Manager immediately.
         </li>
     </ol>
     </p>
     </td>
    </tr>
    
    </table>
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