

<div class="col-lg-9">
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title grey-text">Buyer's Agreement Form</h3>
		</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div align="center">
						<img src="asset/Honda-logo-1920x1080.png" class="img-responsive" height="200" width="200">
					</div>
					<h2 align="center">Buyer's Agreement</h2>
				</div>
			</div>

            <div class="row">
                <div class="well col-lg-10 col-md-offset-1">
					<form class="form-horizontal" method="post" action="index.php?page=buyerAgreement&id=<?php echo $_GET['id']; ?>&bf_id=<?php echo $_GET['bf_id']; ?>">
						<div class="form-group">
							<label class="col-lg-3 control-label">Date : </label>
							<div class="col-lg-6">
								<input type="date" class="form-control" name="date" id="dateii">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-3 control-label">Serial No : </label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="serialNo" id="serialNo">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-3 control-label">I / We </label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="custname" id="custnme">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-3 control-label">I/C No : </label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="ic1" name="ic1" maxlength="6" style="width: 40%; display:inline!important;">
								<input type="text" class="form-control" id="ic2" name="ic2" maxlength="2" style="width: 20%; display:inline!important;">
								<input type="text" class="form-control" id="ic3" name="ic3" maxlength="4" style="width: 30%; display:inline!important;">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-3 control-label">Of </label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="desc1" style="margin-bottom: 10px">
								<input type="text" class="form-control" name="desc2">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-3 control-label"></label>
							<div class="col-lg-6">
								<p><strong>hereby confirm having agreed to purchase this day from ****, the undermentioned&nbsp;</p>
									<label class="radio-inline" style="margin-bottom: 10px"><input type="radio" name="carA" value="NEW">NEW</label>
									<label class="radio-inline" style="margin-bottom: 10px"><input type="radio" name="carA" value="USED">USED</label>
									<p><strong>Vehicle at the price as shown below, on the terms and condition hereinafter mentioned and printed at the back hereof :&nbsp;</p>
									</div>
								</div>

								<table class="table table-bordered table-responsive" id="tableinfo">
									<tr>
										<td><input type="text" class="form-control" id="mk" name="make" placeholder="Make"></td>
										<td><input type="text" class="form-control" id="color" name="color" placeholder="Color"></td>
										<td><input type="text" class="form-control" id="cccapacity" name="cccapacity" placeholder="CC Capacity"></td>
										<td><input type="text" class="form-control" id="yearofmfg" name="yearofmfg" placeholder="Year Of Mfg"></td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" id="engineno" name="engineno" placeholder="Engine No. Reg"></td>
										<td><input type="text" class="form-control" id="chasisno" name="chasisno" placeholder="Chasis No."></td>
										<td><input type="text" class="form-control" id="creditno" name="creditno" placeholder="Credit No."></td>
										<td><input type="text" class="form-control" id="rgnno" name="rgnno" placeholder="Reign No."></td>
									</tr>
								</table>

								<table class="table table-bordered table-responsive" id="tableinfo2">
									<tr>
										<th>DESCRIPTION</th>
										<th>Amount(RM)</th>
									</tr>
									<tr>
										<td><input type="text" class="form-control" name="item1" placeholder="Item 1"
										value="Approved Nett Selling Price(With Standard Accessories)"></td>
										<td>
											<div class="input-group">
												<span class="input-group-addon" id="basic-addon1">RM</span>
												<input type="text" class="form-control calc" name="itm1rm">
											</div>
										</td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" name="item2" placeholder="Item 2"
										value="Excise Duty"></td>
										<td>
											<div class="input-group">
												<span class="input-group-addon" id="basic-addon1">RM</span>
											<input type="text" class="form-control calc" name="itm2rm"></div>
										</td>

									</tr>
									<tr>
										<td><input type="text" class="form-control" name="item3" placeholder="Item 3"
										value="Sales Tax"></td>
										<td>
											<div class="input-group">
												<span class="input-group-addon" id="basic-addon1">RM</span>
												<input type="text" class="form-control calc" name="itm3rm">
											</div>
										</td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" name="item4" placeholder="Item 4"
										value="Mettalic Paint"></td>
										<td>
											<div class="input-group">
												<span class="input-group-addon" id="basic-addon1">RM</span>
												<input type="text" class="form-control calc" name="itm4rm">
											</div>
										</td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" name="item5" placeholder="Item 5"
										value="Registration Fee/Transfer Fee(used Vehicle) Ownership Claim"></td>
										<td>
											<div class="input-group">
												<span class="input-group-addon" id="basic-addon1">RM</span>
												<input type="text" class="form-control calc" name="itm5rm">
											</div>
										</td>
									</tr>
									<tr>
										<td><strong>Road Tax For <input type="text" class="form-control" name="tax" style="width: 30%; display: inline !important;"> Month</td>
											<td style="width: 30%">
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input type="text" class="form-control calc" name="rtaxrm">
												</div>
											</td>
										</tr>
									</table>


									<table class="table table-bordered table-responsive">
										<tr>
											<th >Recommend Acessories</th>
										</tr>
										<tr>
											<th >&nbsp;&nbsp;&nbsp;Extra Acessories :</th>
										</tr>
									</table>
									<table id="dataTable" class="table table-bordered table-responsive">

										<tr>
											<td><input type="checkbox" name="chk[]" /></td>
											<td><input type="text" name="txt[]" class="form-control" placeholder="Accessories Name"/></td>
											<td style="width: 30%">
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input type="text" name="rm[]" class="form-control calc"/>
												</div></td>
										</tr>
									</table>
									<button class="btn btn-default" type="button" value="Add Row" onclick="addRow('dataTable')">
										<i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row
									</button>

									<button class="btn btn-danger" type="button" value="Delete Row" onclick="deleteRow('dataTable')">
										<i class="glyphicon glyphicon-remove"></i>&nbsp;Delete Row
									</button>

									<table class="table table-bordered table-responsive" id="tableinfo2" style="margin-top: 20px">
										<tr>
											<th >Insurance: Sum Insured RM</th>
											<th style="width: 30%">
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input type="text" class="form-control calc" name="insrm">
												</div>
											</th>
										</tr>
										<tr>
											<th >Total Price(On The Road)</th>
											<th>
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input type="text" class="form-control calc" name="ttlprcrm">
												</div>
											</th>
										</tr>
										<tr>
											<th >Less Trade In</th>
											<th>
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input type="text" class="form-control calc" name="tradeinrm">
												</div></th>
										</tr>
										<tr>
											<th >Less Credit Note/Debit Note</th>
											<th>
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input type="text" class="form-control calc" name="cndnrm">
												</div></th>
										</tr>
										<tr>
											<th >Less Down Payment</th>
											<th>
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input type="text" class="form-control calc" name="dprm">
												</div>
											</th>
										</tr>
										<tr>
											<th >Add H.P Encumberance</th>
											<th>
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input type="text" class="form-control calc" name="hpencrm">
												</div></th>
										</tr>
										<tr>
											<th >Balance To Be Settled By You</th>
											<th style="width: 20%">
												<div class="input-group">
													<span class="input-group-addon" id="basic-addon1">RM</span>
													<input id="total" type="text" class="form-control" name="blncerm">
												</div>
											</th>
										</tr>
										<tr>
											<th >Amount To Be Financed By <input type="text" name="fname" class="form-control" style="width: 50%;display: inline!important;" placeholder="Name"></th>
											<th style="width: 20%"> <div class="input-group">
												<span class="input-group-addon" id="basic-addon1">RM</span>
												<input type="text" class="form-control" name="frm">
											</div>
											</th>
										</tr>
									</table>

									<div class="form-group">
										<label class="col-lg-4">Monthly Install:</label>
										<div class="col-lg-4">
											<input type="text" name="minstall" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-4">Due Date :</label>
										<div class="col-lg-4">
											<input type="date" name="mduedate" class="form-control">
										</div>
									</div>

									<hr>



									<label><h3>Summary Of Payment :</h3></label>
									<table class="table table-s table-responsive">
										<tr>
											<th>Booking Fee/Deposit Received Receipt No. : <input type="text" name="bFeerno" class="form-control" style="display: inline!important;" value="2314"></th>
											<th>Dated : <input type="date" id="bfdrdate" name="bfdrdate" class="form-control" style="display: inline!important;"></th>
										</tr>
										<tr>
											<th >Down Payment Received Receipt No. : <input type="text" name="dPay" class="form-control" style="display: inline!important;" value="5252"></th>
											<th>Dated : <input type="date" id="dPaydate" name="dPaydate" class="form-control" style="display: inline!important;"></th>
										</tr>
										<tr>
											<th >Balance Of RM  :
											<input type="text" name="balncerm" class="form-control" style="display: inline!important;"  value="4252"></th>
											<th>To Be Paid : <input type="text" name="rmabaka" class="form-control" style="display: inline!important;"  value="6363"></th>
										</tr>
									</table>

									<hr>

									<div class="row">
										<div class="col-lg-12">
											<p>I/We have read and understand the terms on the back
											hereof and agree to them as part of this order as if they were printed above :</p>
										</div>
									</div>

                                       <div class="row">
                                            <div class="containerforsign" align="center">
                                                <signature-pad accept="accept" clear="clear" height="220" width="300" dataurl="dataurl"></signature-pad>
                                            </div>
                                           <?php
                                               $cust_id = $_GET['id'];
                                               $sqlcust = "SELECT * FROM tb_cust_info WHERE cust_id = '$cust_id'";
                                               $querycust = mysqli_query($con, $sqlcust);
                                               $rowcust = mysqli_fetch_array($querycust);

                                               echo '
                                              <div align="center" style="margin-top: 10px">
                                                 <p>Name : '.$rowcust['cust_name'].'</p>
                                                 <p>IC : '.$rowcust['cust_ic'].'</p>
                                               </div>
                                               
                                               ';

                                           ?>
                                            <div class="buttons" style="margin-top: 10px" align="center">
                                                <button class="btn btn-warning" type="button" ng-click="clear()">
                                                    <i class="glyphicon glyphicon-erase"></i>Clear</button>
                                            </div>
                                        </div>

									<input type="hidden" name="img" value="{{signature.dataUrl}}">

									<div class="form-group" style="margin-top: 20px" align="center">
										<input class="btn btn-primary" type="submit" name="submit" value="Submit" ng-click="signature = accept()"/>
									</div>
								</form>
							</div>
						</div>
						<button class="btn btn-default" id="back">Back</button>
					</div>
				</div>
			</div>

			<?php

				$id = $_GET['bf_id'];

				$sql = "SELECT * FROM tb_book_form WHERE bf_id = '$id'";
				$result = mysqli_query($con, $sql);
				$row = mysqli_fetch_array($result);
				$custid = $row['bf_cust_id'];
				$model_id = $row['bf_model_id'];
				$variant_id = $row['bf_variant_id'];
				$color_id = $row['bf_colour_id'];
				$prc_id = $row['bf_prc_id'];
				$eng = $row['bf_engine_num'];
				$chasis = $row['bf_chasis_no'];

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
				$cccapacity = $row4['vrnt_cc'];
				$cust_name = $row2['cust_name'];
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


				echo'
				<script type="text/javascript">
				
				var today = new Date();
				
				
				document.getElementById("dateii").valueAsDate = today;
				
				document.getElementById("custnme").value = "'.$cust_name.'";
				document.getElementById("ic1").value = "'.$ic1.'";
				document.getElementById("ic2").value = "'.$ic2.'";
				document.getElementById("ic3").value = "'.$ic3.'";
				
				document.getElementById("mk").value = "'.$variant.'";
				document.getElementById("color").value = "'.$color.'";
				
				document.getElementById("engineno").value = "'.$eng.'";
				document.getElementById("chasisno").value = "'.$chasis.'";
				
				document.getElementById("cccapacity").value = "'.$cccapacity.'";
				document.getElementById("bfdrdate").valueAsDate = today;
				
				</script>
				';

				if(isset($_POST['submit'])){

					$ba_agree_date = $_POST['date'];
					$ba_desc = $_POST['desc1'] + $_POST['desc2'];
					$ba_car_cond = $_POST['carA'];
					$ba_item1_desc = $_POST['item1'];
					$ba_item1_prc = $_POST['itm1rm'];
					$ba_item2_desc = $_POST['item2'];
					$ba_item2_prc = $_POST['itm2rm'];
					$ba_item3_desc = $_POST['item3'];
					$ba_item3_prc = $_POST['itm3rm'];
					$ba_item4_desc = $_POST['item4'];
					$ba_item4_prc = $_POST['itm4rm'];
					$ba_item5_desc = $_POST['item5'];
					$ba_item5_prc = $_POST['itm5rm'];
					$ba_rtax_prd = $_POST['tax'];
					$ba_rtax_prc = $_POST['rtaxrm'];
					$ba_ins_sum = $_POST['insrm'];
					$ba_ttl_prc_otr = $_POST['ttlprcrm'];
					$ba_tradein = $_POST['tradeinrm'];
					$ba_cndn = $_POST['cndnrm'];
					$ba_down_pay = $_POST['dprm'];
					$ba_hp_encm = $_POST['hpencrm'];
					$ba_blnce_s = $_POST['blncerm'];
					$ba_fname = $_POST['fname'];
					$ba_fby = $_POST['frm'];
					$ba_monthly_i = $_POST['minstall'];
					$ba_due_date = $_POST['mduedate'];
					$ba_bfdrrno = $_POST['bFeerno'];
					$ba_downpay_rno = $_POST['dPay'];
					$ba_bf_date = $_POST['bfdrdate'];
					$ba_dpay_date = $_POST['dPaydate'];
					$blnce = $_POST['rmabaka'];
					$sign = $_POST['img'];

					$sqlba = "INSERT INTO `tb_buyer_agrmnt` (`ba_id`, `ba_agree_date`, `ba_of_desc`, 
					`ba_car_cond`, `ba_item1_desc`, `ba_item1_prc`, 
					`ba_item2_desc`, `ba_item2_prc`, `ba_item3_desc`, 
					`ba_item3_prc`, `ba_item4_desc`, `ba_item4_prc`, 
					`ba_item5_desc`, `ba_item5_prc`, `ba_rtax_prd`, 
					`ba_rtax_prc`, `ba_ins_sum`, `ba_ttl_prc_otr`, 
					`ba_tradein`, `ba_cn_dn`, `ba_down_pay`, 
					`ba_hp_encm`, `ba_blnce_settle`, `ba_financeby_name`, 
					`ba_fby_prc`, `ba_monthly_i`, `ba_due_date`, 
					`ba_bfdr_receipt_no`, `ba_downpay_rno`, `ba_bfdr_date`, 
					`ba_downpay_date`, `ba_balncerm`, `ba_cust_sign`, 
					`bf_id`) 
					VALUES 
					(NULL, '$ba_agree_date', '$ba_desc', 
					'$ba_car_cond', '$ba_item1_desc', '$ba_item1_prc', 
					'$ba_item2_desc', '$ba_item2_prc', '$ba_item3_desc', 
					'$ba_item3_prc', '$ba_item4_desc', '$ba_item4_prc', 
					'$ba_item5_desc', '$ba_item5_prc', '$ba_rtax_prd', 
					'$ba_rtax_prc', '$ba_ins_sum', '$ba_ttl_prc_otr', 
					'$ba_tradein', '$ba_cndn', '$ba_down_pay', 
					'$ba_hp_encm', '$ba_blnce_s', '$ba_fname', 
					'$ba_fby', '$ba_monthly_i', '$ba_due_date', 
					'$ba_bfdrrno', '$ba_downpay_rno', '$ba_bf_date', 
					'$ba_dpay_date', '$blnce', '$sign', 
					'$id')";

					$query = mysqli_query($con, $sqlba);
					if($query){
						echo "<script type= 'text/javascript'>alert('Success');
						</script>";
					}
				}
			?>
