<?php



?>
<div class="col-lg-9">
               <div class="panel panel-default">
                   <div class="panel-heading main-color-bg">
                       <h3 class="panel-title grey-text">Booking Form</h3>
                   </div>
                   <div class="panel-body">
                       <div class="form-group">
                           <label for="sNo">Serial No.</label>
                           <input type="text" id="sNo" name="sNo" style="padding-left: 10px">
                       </div>
                       <div class="row">
                           <div class="col-md-12">
                            <ul class="nav nav-tabs nav-tabs-responsive nav-justified">
                                <li class="active"><a data-toggle="tab" href="#cust">Customer Particular</a></li>
                                <li class="next"><a data-toggle="tab" href="#order">Order Particular</a></li>
                                <li class="next"><a data-toggle="tab" href="#pricestruct">Price Structure</a></li>
                                <li class="next"><a data-toggle="tab" href="#finance">Finance</a></li>
                                <li><a data-toggle="tab" href="#insurance">Insurance</a></li>
                            </ul>
                           </div>
                       </div>

                       <form class="form-horizontal" name="bFee" method="post" action="index.php?page=bookingForm&id=<?php echo $_GET['id']; ?>">
                         <div class="tab-content">

                           <div id="cust" class="tab-pane fade in active">
                             <div class="row">
                             <div class="col-md-12">
                               <div class="well">
                                   <legend>Customer Info :</legend>
                                   <div class="form-group">
                                       <label class="col-lg-3 control-label">Name :</label>
                                       <div class="col-lg-6">
                                       <input type="text"id="custname" name="custname" class="form-control">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="col-lg-3 control-label">Identity Card Number :</label>
                                       <div class="col-lg-6">
                                           <input type="text" class="form-control" id="ic1" name="ic1" maxlength="6" style="width:30%;display: inline; !important" onkeypress="return isNumber(event)">
                                           <input type="text" class="form-control" id="ic2" name="ic2" maxlength="2" style="width:20%;display: inline; !important" onkeypress="return isNumber(event)">
                                           <input type="text" class="form-control" id="ic3" name="ic3" maxlength="4" style="width:30%;display: inline; !important" onkeypress="return isNumber(event)">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="col-lg-3 control-label">Address :</label>
                                       <div class="col-lg-6">
                                           <input type="text" id="address1" name="address1" class="form-control">
                                           <input type="text" id="address2" name="address2" class="form-control">
                                       </div>
                                   </div>
                                   <legend>Contact Info :</legend>
                                   <div class="form-group">
                                       <label class="col-lg-3 control-label">Home :</label>
                                       <div class="col-lg-6">
                                           <input type="text" name="homephone" id="homephone" class="form-control">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="col-lg-3 control-label">Office :</label>
                                       <div class="col-lg-6">
                                           <input type="text" class="form-control" id="officep" name="officep">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="col-lg-3 control-label">H/P :</label>
                                       <div class="col-lg-6">
                                           <input type="text" id="hp" name="hp" class="form-control">
                                       </div>
                                   </div>

                                   <a class="btn btn-success btnNext" >Next</a>
                               </div>
                           </div>
                       </div>
                           </div>

                           <div id="order" class="tab-pane fade">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="well">
                                               <legend>Order's Particular :</legend>
                                               <div class="form-group">
                                                   <label class="col-lg-3 control-label">Model :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="model" name="model" class="form-control">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-lg-3 control-label">Variant :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" class="form-control" id="variant" name="variant">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-lg-3 control-label">Color :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="color" name="color" class="form-control">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-lg-3 control-label">Delivery :</label>
                                                   <div class="col-lg-6">
                                                       <label class="radio-inline"><input type="radio" name="optradio" value="EARLY">EARLY</label>
                                                       <label class="radio-inline"><input type="radio" name="optradio" value="MID">MID</label>
                                                       <label class="radio-inline"><input type="radio" name="optradio" value="END">END</label>&nbsp;
                                                       <select class="form-control" id="month" name='month' style="width: 20%;display: inline; ">
                                                           <option value="00"></option>
                                                           <option value="01">01</option>
                                                           <option value="02">02</option>
                                                           <option value="03">03</option>
                                                           <option value="04">04</option>
                                                           <option value="05">05</option>
                                                           <option value="06">06</option>
                                                           <option value="07">07</option>
                                                           <option value="08">08</option>
                                                           <option value="09">09</option>
                                                           <option value="10">10</option>
                                                           <option value="11">11</option>
                                                           <option value="12">12</option>
                                                       </select> /
                                                       <input class="form-control" type="text" id="expdate1" name="year" style="width:20%;display: inline; !important"  maxlength="4">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-lg-3 control-label">Sales Type :</label>
                                                   <div class="col-lg-6">
                                                       <label class="radio-inline"><input type="radio" name="sType" value="HP">HP</label>
                                                       <label class="radio-inline"><input type="radio" name="sType" value="Cash">Cash</label>
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-lg-3 control-label">Chasis Number : </label>
                                                   <div class="col-lg-6">
                                                       <input type="text" name="chasisno" class="form-control">
                                                       <span class="help-block">EG. 600132CTZP0997 </span>
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-lg-3 control-label">Engine Number :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" name="engineno" class="form-control">
                                                       <span class="help-block">EG. 52WVC10338 </span>
                                                   </div>
                                               </div>

                                           <a class="btn btn-success btnNext" >Next</a>
                                           <a class="btn btn-warning btnPrevious" >Previous</a>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div id="pricestruct" class="tab-pane fade in">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="well">
                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Selling Price :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="sellprice" name="sellprice" class="form-control">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Less Discount :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" class="form-control" id="discount" name="discount">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Sub Total :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="sTotal" name="sTotal" class="form-control calc">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">GST (6%) :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="gst" name="gst" class="form-control calc">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Number Plate(Inclusive GST 6%) :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" class="form-control" id="nPlate" name="nPlate calc">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Road Tax(1 Year) :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="rTax" name="rTax" class="form-control calc">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Registration Fee :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="rFee" name="rFee" class="form-control calc">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Ownership Endorsement Fee :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="OwnerEF" name="OwnerEF" class="form-control calc">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Accessories(Inclusive GST 6%) :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="acssories" name="acssories" class="form-control calc">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Miscellaneous Sales(Inclusive GST 6%) :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="miscSale" name="miscSale" class="form-control calc">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Insurances(Inclusive GST 6%) :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="ins" name="ins" class="form-control calc">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">NCD :</label>
                                                   <div class="col-lg-6">
                                                       <div class="input-group">
                                                       <input type="text" name="ncd" class="form-control">
                                                       <span class="input-group-addon" id="basic-addon2">%</span>
                                                       </div>
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">TOTAL :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="total" name="ttl" class="form-control">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">BOOKING FEE PAID :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="bFeepaid" name="bFeepaid" class="form-control">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">TOTAL OUTSTANDING SUM :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" id="ttlOutstanding" name="ttlOutstanding" class="form-control">
                                                   </div>
                                               </div>

                                           <a class="btn btn-success btnNext" >Next</a>
                                           <a class="btn btn-warning btnPrevious" >Previous</a>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div id="finance" class="tab-pane fade in">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="well">
                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label"></label>
                                                   <div class="col-lg-6">
                                                       <label class="radio-inline"><input type="radio" name="financeopt" value="OwnFinanced">Own Financed</label>
                                                       <label class="radio-inline"><input type="radio" name="financeopt" value="PanelCo">Panel Co</label>
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Amount Financed :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" class="form-control" id="aFinanced" name="aFinanced">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Financed Period :</label>
                                                   <div class="col-lg-6">
                                                       <select name="fPeriod" class="form-control">
                                                           <option value="0">Select Period</option>
                                                           <option value="1 Year">1 Year</option>
                                                           <option value="2 Year">2 Year</option>
                                                           <option value="3 Year">3 Year</option>
                                                           <option value="4 Year">4 Year</option>
                                                           <option value="5 Year">5 Year</option>
                                                           <option value="6 Year">6 Year</option>
                                                           <option value="7 Year">7 Year</option>
                                                           <option value="8 Year">8 Year</option>
                                                           <option value="9 Year">9 Year</option>
                                                       </select>
                                                   </div>
                                               </div>

                                           <a class="btn btn-success btnNext" >Next</a>
                                           <a class="btn btn-warning btnPrevious" >Previous</a>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div id="insurance" class="tab-pane fade in">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="well">

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Company :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" class="form-control" name="company" value="MSIG MALAYSIA">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Agent Code :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" class="form-control" name="aCode" value="0001">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Cover Note :</label>
                                                   <div class="col-lg-6">
                                                       <input type="text" name="coverNoted" class="form-control">
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <label class="col-lg-4 control-label">Date Issued :</label>
                                                   <div class="col-lg-6">
                                                       <input type="date" name="dateIssued" class="form-control">
                                                   </div>
                                               </div>

                                           <a class="btn btn-warning btnPrevious" >Previous</a>
                                       </div>
                                   </div>
                               </div>
                           </div>

                             <div class="row">
                               <div class="col-md-12">
                                 <div class="well">
                                    <p><b>I, the undersigned , hereby agree and acknowlegde to be bound by the terms and conditions
                                       contained herein and which shall be binding and enforceable upon me. I hereby acknowledge
                                       and agree on the following :</b>
                                    </p>
                                     <p>
                                     <ol type="a">
                                         <li style="margin-top: 10px">
                                             that HMSB Authorized Dealers has the sole discretion in deciding on refunding
                                             my booking fees that has been paid in total of RM <input type="text" id="bf" name="bf" style="width: 20%!important;">
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
                                 </div>
                               </div>
                             </div>

                             <div ng-controller="AppCtrl">
                                <div class="row">

                                     <div class="col-lg-4" style="margin-bottom: 20px">
                                         <div class="containerforsign">
                                             <label>Customer's Signature</label>
                                             <signature-pad accept="party1.accept" clear="party1.clear" height="220" width="300" dataurl="party1.dataurl"></signature-pad>
                                         </div>

                                         <div class="form-group" style="padding-left: 10px; padding-right: 10px; margin-top: 20px">
                                             <label>Name :</label>
                                             <input type="text" id="name" name="name" class="form-control"/>
                                             <label>IC No. :</label>
                                             <input type="text" id="ic" name="ic" class="form-control"/>
                                         </div>

                                         <div class="buttons" style="margin-top: 10px" align="center">
                                             <button class="btn btn-warning" type="button" ng-click="party1.clear()">
                                                 <i class="glyphicon glyphicon-erase"></i>&nbsp;Clear Signature</button>
                                         </div>
                                     </div>


                                     <div class="col-lg-4" style="margin-bottom: 20px">
                                         <div class="containerforsign">
                                             <label>Sale Advisor's Signature</label>
                                             <signature-pad accept="party2.accept" clear="party2.clear" height="220" width="300" dataurl="party2.dataurl"></signature-pad>
                                         </div>

                                         <div class="form-group" style="padding-left: 10px; padding-right: 10px; margin-top: 20px">
                                             <?php
                                             $sql = "SELECT * FROM tb_staff WHERE st_role = 3";
                                             $query = mysqli_query($con, $sql);
                                             $row = mysqli_fetch_array($query);
                                             $saname = $row['st_name'];
                                             $saic = $row['st_ic'];

                                             echo'
                                             <label>Name :</label>
                                             <input type="text" name="saname" class="form-control" value="'.$saname.'"/>
                                             <label>IC No. :</label>
                                             <input type="text" name="saic" class="form-control" value="'.$saic.'"/>';
                                             ?>
                                         </div>

                                         <div class="buttons" style="margin-top: 10px" align="center">
                                             <button class="btn btn-warning" type="button" ng-click="party2.clear()">
                                                 <i class="glyphicon glyphicon-erase"></i>&nbsp;Clear Signature</button>
                                         </div>
                                     </div>

                                     <div class="col-lg-4" style="margin-bottom: 20px">
                                         <div class="containerforsign">
                                             <label>Sales Manager's Signature</label>
                                             <signature-pad accept="party3.accept" clear="party3.clear" height="220" width="300" dataurl="party3.dataurl" required></signature-pad>
                                         </div>

                                         <div class="form-group" style="padding-left: 10px; padding-right: 10px; margin-top: 20px">
                                             <?php
                                                $sql = "SELECT * FROM tb_staff WHERE st_role = 2";
                                                $query = mysqli_query($con, $sql);
                                                $row = mysqli_fetch_array($query);
                                                $managername = $row['st_name'];
                                                $manageric = $row['st_ic'];

                                             echo'
                                             <label>Name :</label>
                                             <input type="text" name="smname" class="form-control" value="'.$managername.'">
                                             <label>IC No. :</label>
                                             <input type="text" name="smic" class="form-control"  value="'.$manageric.'">
                                             ';
                                             ?>
                                         </div>

                                         <div class="buttons" style="margin-top: 10px" align="center">
                                             <button class="btn btn-warning" type="button" ng-click="party3.clear()">
                                                 <i class="glyphicon glyphicon-erase"></i>&nbsp;Clear Signature</button>
                                         </div>
                                     </div>


<!--                                     <div class="buttons">-->
<!--                                         <button type="button" ng-click="sign()" class="sign">Sign</button>-->
<!--                                     </div>-->

                                     <input type="hidden" name="sign1" value="{{party1.signature.dataUrl}}">
                                     <input type="hidden" name="sign2" value="{{party2.signature.dataUrl}}">
                                     <input type="hidden" name="sign3" value="{{party3.signature.dataUrl}}">

                                 </div>

                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="well">
                                             <p><b>Note :</b>
                                             </p>
                                             <p>
                                             <ol type="1">
                                                 <li style="margin-top: 10px">
                                                     Customer shall pay the booking fee after the Part ii (of the Second Schedule)
                                                     of the loan agreement is completed.
                                                 </li>
                                                 <li style="margin-top: 10px">
                                                     Booking fee is NOT taxable. However in casse of cancellation HMSB Authorized Dealer
                                                     reserves the right to claim the 6% of GST fom the customer.
                                                 </li>
                                                 <li style="margin-top: 10px">
                                                     All payment by CHEQUE should be oneself and made payable to HMSB Authorized Dealers.
                                                 </li>
                                                 <li style="margin-top: 10px">
                                                     Insist on an Official Receipt immediately if payment made by CASH. If
                                                     you do not receive an Official Receipt within seven(7) days after payment is made,
                                                     please notify the Sales Manager immediately.
                                                 </li>
                                             </ol>
                                             </p>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group" style="margin-top: 40px" align="center">
                                     <div>
<!--                                         <input type="button" name="save" class="btn btn-info sign" ng-click="sign()" value="Save">-->
                                         <input type="submit" name="submit" class="btn btn-primary sign" ng-click="sign()">
                                         <input type="reset" name="reset" class="btn btn-danger">
                                     </div>
                                 </div>
                             </div>


                       </div>
                       </form>
                       <button class="btn btn-default" id="back">Back</button>
                   </div>
           </div>
        </div>


<?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_book_form WHERE bf_id = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $custid = $row['bf_cust_id'];
    $model_id = $row['bf_model_id'];
    $variant_id = $row['bf_variant_id'];
    $color_id = $row['bf_colour_id'];
    $prc_id = $row['bf_prc_id'];

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

    echo'
        <script type="text/javascript">
            document.getElementById("sNo").value = "B188-'.$serialno.'";
            document.getElementById("custname").value = "'.$cust_name.'";
            document.getElementById("ic1").value = "'.$ic1.'";
            document.getElementById("ic2").value = "'.$ic2.'";
            document.getElementById("ic3").value = "'.$ic3.'";
            document.getElementById("name").value = "'.$cust_name.'";
            document.getElementById("ic").value = "'.$ic1.'"+"'.$ic2.'"+"'.$ic3.'";
            document.getElementById("address1").value = "'.$cust_address.'";
            document.getElementById("homephone").value = "'.$cust_p_home.'";
            document.getElementById("officep").value = "'.$cust_p_office.'";
            document.getElementById("hp").value = "'.$cust_p_mobile.'";
            
            document.getElementById("model").value = "'.$model.'";
            document.getElementById("variant").value = "'.$variant.'";
            document.getElementById("color").value = "'.$color.'";
            
            document.getElementById("sellprice").value = "'.$sell_price.'";
            document.getElementById("gst").value = "'.$gst.'";
            document.getElementById("nPlate").value = "'.$noplate.'";
            document.getElementById("rFee").value = "'.$reg_fee.'";
            document.getElementById("OwnerEF").value = "'.$oef.'";
            document.getElementById("ins").value = "'.$insurance.'";
            document.getElementById("rTax").value = "'.$roadtax_1y.'";
            
            
            document.getElementById("discount").onkeyup = function() {
              var sellprice = document.getElementById("sellprice").value;
              var discount = document.getElementById("discount").value;
            
              document.getElementById("sTotal").value = parseFloat(sellprice) - parseFloat(discount);
            };
            
            
             document.getElementById("bFeepaid").onkeyup = function() {
              var total = document.getElementById("total").value;
              var bFee = document.getElementById("bFeepaid").value;
              
              document.getElementById("bf").value = bFee;
            
              document.getElementById("ttlOutstanding").value = parseFloat(total) - parseFloat(bFee);
               
            };
            
            var sell = document.getElementById("sellprice").value;
            var amtF = 0.1 * parseFloat(sell);
            document.getElementById("aFinanced").value =  sell - amtF ;
        </script>
    ';


    if(isset($_POST['submit'])){
//        $name = $_POST['name'];
//        $ic = $_POST['ic1'] . $_POST['ic2'] . $_POST['ic3'];
//        $address = $_POST['address1'] . $_POST['address2'];
//        $homep = $_POST['homephone'];
//        $officep = $_POST['officep'];
//        $mobilep = $_POST['hp'];

//        $carmdl = $_POST['model'];
//        $sql7 = "SELECT mdl_id FROM tb_model WHERE mdl_desc = '$carmdl'";
//        $query5 = mysqli_query($con, $sql7);
//        $cmid = mysqli_fetch_array($query5);
//        $mdl_id =
//        $carvrnt = $_POST['variant'];
//        $sql8 = "SELECT vrnt_id FROM tb_variant WHERE vrnt_desc = '$carvrnt'";
//        $carclr = $_POST['color'];
//        $sql9 = "SELECT clr_id FROM tb_colour WHERE clr_desc = '$carclr'";

        $delivery_date = $_POST['optradio'].'-'.$_POST['month'].'-'.$_POST['year'];
        $sales_type = $_POST['sType'];
        $chasis_no = $_POST['chasisno'];
        $engine_no = $_POST['engineno'];
        $total = $_POST['ttl'];
        $bFee = $_POST['bFeepaid'];
        $type_finance = $_POST['financeopt'];
        $amt_financed = $_POST['aFinanced'];
        $finance_prd = $_POST['fPeriod'];
        $discount = $_POST['discount'];
        $acs =$_POST['acssories'];
        $ncd =$_POST['ncd'];
        $misc = $_POST['miscSale'];

        $ins_company = $_POST['company'];
        $agent_code = $_POST['aCode'];
        $cover_noted = $_POST['coverNoted'];
        $dateIssued = $_POST['dateIssued'];

        $sign_Cust = $_POST['sign1'];
        $sign_SA = $_POST['sign2'];
        $sign_SM = $_POST['sign3'];

        $SA_name = $_POST['saname'];
        $SM_name = $_POST['smname'];
        $SA_ic = $_POST['saic'];
        $SM_ic = $_POST['smic'];


        $sqlstt = "UPDATE `tb_book_form` SET 
                   `bf_delivery_date` = '$delivery_date', `bf_sales_type` = '$sales_type', `bf_chasis_no` = '$chasis_no', 
                   `bf_engine_num` = '$engine_no', `bf_discount` = '$discount', `bf_accessories` = '$acs', `bf_misc_sales` = '$misc', `bf_ncd` = '$ncd', 
                   `bf_total_fee` = '$total', `bf_booking_fee` = '$bFee', 
                   `bf_type_finance` = '$type_finance', `bf_amt_financed` = '$amt_financed', 
                   `bf_finance_period` = '$finance_prd', `bf_company` = '$ins_company', `bf_agent_code` = '$agent_code', 
                   `bf_cover_noted` = '$cover_noted', `bf_date_issued` = '$dateIssued', 
                   `bf_cust_sign` = '$sign_Cust', `bf_SA_sign` = '$sign_SA', `bf_SM_sign` = '$sign_SM', `bf_SM_name` = '$SM_name', `bf_SA_name` = '$SA_name',
                   `bf_SM_ic` = '$SM_ic', `bf_SA_ic` = '$SA_ic'
                    WHERE `tb_book_form`.`bf_id` = '$id'";


        $update = mysqli_query($con, $sqlstt);

        if($update){
            echo "<script type= 'text/javascript'>
                              location.href = 'index.php?page=bookSuccess&id=$custid&bf_id=$id';</script>";
        }

    }
?>
